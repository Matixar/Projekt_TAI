@extends('layouts.subpagelayout')
@section('content')
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Księga gości
      <small>zostaw ślad po sobie :)</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Księga gości</li>
    </ol>
    
<!-- Guestbook form -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            
    <form role="form" name="guestbook" method='POST' action='{{ route('store')}}'> {{ csrf_field() }}
        <div class="control-group form-group">
            <div class="controls">
                <label>Rodzaj wpisu</label>
                <select id="reason" class="form-control" name="reason">
                    <option value="positive" selected>Pochwała</option>
                    <option value="negative">Skarga</option>
                    <option value="idea">Własne pomysły</option>
                    <option value="other">Inne</option>
                </select>
            </div>
        </div>
                <div class="control-group form-group">
            <div class="controls{{ $errors->has('message')?'has-error':'' }}" >
                <label>Wiadomość</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name='message' required data-validation-required-message="Proszę podać swoją wiadomość." maxlength="999" minlength="5" style="resize:none"></textarea>
            </div>
        </div>
        @auth
        <button type="submit" class="btn btn-primary" id="sendGuestbookEntry">Wyślij wiadomość</button>
        @endauth
    </form>
            
            @guest
            <h4>Możesz dodawać komentarze jedynie kiedy jesteś zalogowany!</h4>
            @endguest
            </div>
        <!--Sent messages -->
        @auth
        <div class="col-lg-8 mb-4">
            <h3>Wpisy w księdze gości:</h3>
            @foreach($comments as $comment)
            <div class='card mb-4'><div class='card-body'><div class='row'><div class='col-lg-3'><div class='row'>
                                Komentarz nr: {{$comment->id}} </div><div class='col'>Nick: {{$comment->user->name}}</div>
                            <br><div class='row'>
                                @if($comment->user_id == \Auth::user()->id)
                                <a class='btn btn-primary mr-1' href="{{route('edit',$comment)}}" title='Edytuj'>Edytuj</a>
                                
                                <a class='btn btn-primary' href='{{route('delete',$comment)}}' onclick="return confirm('Jesteś pewien?')" title="Skasuj"><i class="fa fa-trash-o"></i> Usuń</a>
                                @endif
                            </div>
                        </div>
                        <div class='col-lg-8' id='textarea'>
                            <h3 class='card-title'>
                                @if($comment->messagecategory === 'positive')
                                Pochwała
                                @elseif($comment->messagecategory === 'negative')
                                Skarga
                                @elseif($comment->messagecategory === 'idea')
                                Własne pomysły
                                @elseif($comment->messagecategory === 'other')
                                Inne
                                @endif
                            </h3>
                            <p class='card-text' id='message'>{{$comment->message}}</p>
                        </div>
                    </div>
                        </div>
                    <div class='card-footer text-muted'>
                        @if($comment->created_at == $comment->updated_at)
                        Ostatnia modyfikacja: {{$comment->created_at}}
                        @else
                        Ostatnia modyfikacja: {{$comment->created_at}} (edytowano)
                        @endif
                    </div>
                </div>
            @endforeach
            <div id="records"></div>
            @endauth
            @guest
            <h3>Zawartość dostępna tylko dla zalogowanych użytkowników</h3>
            @endguest
        </div>
    </div>
  </div>
@endsection