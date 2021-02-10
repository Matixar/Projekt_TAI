@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Jesteś zalogowany!
                    <br>
                    <a href="{{ route('homepage') }}" class="btn btn-primary" style='float: right;'>Przejdź do strony głównej</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layouts.partials.footer-scripts')
