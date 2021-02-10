  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #7e4300">
    <div class="container">
      <a class="navbar-brand" href="{{ route('homepage') }}">Strona główna</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Wyloguj</a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
            </li>
            @else
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Zaloguj</a>
                <ul id="login-dp" class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio" style='min-width: 275px; padding-left: 25px; padding-right: 10px;'>
                    <div class='row align-content-between'>
                        <form class="form" role="form" method="POST" action="{{route('login')}}" accept-charset="UTF-8" id="login-nav">
                            @csrf
                    <div class="form-group">
			<label class="sr-only" for="email">Adres email</label>
			 <input type="email" class="form-control @error('email') is-invalid @enderror" name='email' id="email" value="{{ old('email') }}" placeholder="Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Hasło</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name='password'  placeholder="Hasło" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="help-block text-right"><a href="{{route('password.request')}}">Zapomniałeś hasła?</a></div>
                    </div>
                    <div class="form-group">
			<button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input  type="checkbox" {{ old('remember') ? 'checked' : '' }}name="remember" id="remember"><label class="form-check-label" for="remember">  Zapamiętaj mnie</label>
			</label>
                    </div>         
                        </form>
                    </div>
                    @if (Route::has('register'))
                    <div class="bottom text-center">
                    Jesteś nowy? <a href="{{ route('register') }}"><b>Zarejestruj się</b></a>
                    </div>
                    @endif
                </ul>
            </li>
            @endauth
            @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('guestbook') }}">Księga gości</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Zawartość
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="{{ route('roulette') }}">Loteria</a>
              <a class="dropdown-item" href="{{ route('gallery') }}">Galeria</a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>