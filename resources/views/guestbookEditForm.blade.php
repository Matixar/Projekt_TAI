<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/modern-business.css" rel="stylesheet">
@extends('layouts.subpagelayout')
@section('content')

<div class='container'>
    <div class="card">
        <div class="card-body">
<form role="form" id="comment-form" method="post" action="{{ route('update', $comment) }}">
 {{ csrf_field() }}
 <input name="_method" type="hidden" value="PUT">
 <div class="control-group form-group">
 <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}"
 id="roles_box">
 <label><b>Treść</b></label><br>
 <textarea name="message" id="message" cols="30" rows="10" required>
 {{$comment->message}}
</textarea>
 </div>
 </div>
 <div class="">
 <button type="submit" class="btn btn-success">Zapisz</button>
 </div>
</form>
</div>
    </div>
</div>
 <script src="<?php echo asset("../vendor/jquery/jquery.min.js"); ?>"></script>
  <script src="<?php echo asset("../vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
@endsection