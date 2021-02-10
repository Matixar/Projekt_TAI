@extends('layouts.mainlayout')
@section('content')
 <div class="container" >
    <h1 class="my-4">Witaj na stronie</h1>
    <!-- Content on other pages with explanation -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Galeria</h4>
          <div class="card-body">
            <p class="card-text">Galeria zdjęć związanych z życiem i twórczością Fryderyka Chopina oraz jego utwory.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('gallery') }}" class="btn btn-primary">Przejdź dalej</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Księga gości</h4>
          <div class="card-body">
            <p class="card-text">Napisz nam, co Ci się podoba, jakie masz uwagi, swoje pomysły lub przelej swoje refleksje na stronę.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('guestbook') }}" class="btn btn-primary">Przejdź dalej</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Kontakt</h4>
          <div class="card-body">
            <p class="card-text">Skontaktuj się z nami, zobacz naszą lokalizację i godziny pracy.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('contact') }}" class="btn btn-primary">Przejdź dalej</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Lottery section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>LOTERIA</h2>
        <p>Wygraj przeróżne nagrody:</p>
        <ul>
          <li>
            <strong>Samochód</strong>
          </li>
          <li>Długopis</li>
          <li>Yerba Mate</li>
          <li>Głośnik Bluetooth</li>
        </ul>
        <p>I inne.</p>
        <p>Tylko teraz! Sprawdź swoje szczęście i wygraj samochód! Kliknij w poniższy przycisk aby wejść do gry.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="https://compote.slate.com/images/56349e70-3503-4129-a5ea-4d8d2935a6d0.jpeg?width=780&height=520&rect=2931x1954&offset=69x0" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Lottery button section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Klikając przycisk akceptujesz regulamin konkursu i regulamin strony. Zgodnie z KK 21 p. 37 strona nie ponosi odpowiedzialności za poniesione straty materialne podczas korzystania z jej zawartości.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="{{ route('roulette') }}">Kliknij tutaj</a>
      </div>
    </div>

  </div>
@endsection