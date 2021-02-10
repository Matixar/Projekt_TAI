@extends('layouts.subpagelayout')
@section('content')
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Skontaktuj się z nami
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Kontakt</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.52637688852!2d22.548873497342207!3d51.23526943028904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4722577729316bd9%3A0x442236391b743bc!2sPolitechnika%20Lubelska%2C%2020-618%20Lublin!5e0!3m2!1spl!2spl!4v1590657150568!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Dane kontaktowe:</h3>
        <p>
          ul. Nadbystrzycka 38A
          <br>20-618 Lublin
          <br>
        </p>
        <p>
          <abbr title="Telefon">P</abbr>: 81 538 42 87
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:sylwester.kot@pollub.edu.pl">we.dziekanat@pollub.pl
          </a>
        </p>
        <p>
            <abbr title="Godziny otwarcia">H</abbr>: <br>Poniedziałek: Nieczynne<br>
            Wtorek - Piątek: 10:00 - 13:00<br>
        Soboty zjazdowe: 8:00 - 12:00
                                                    
        </p>
      </div>
    </div>
    <!-- /.row -->
  </div>
@endsection