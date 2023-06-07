<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Agrobio.ru') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-opacity-50 text-bg-dark p-3 border border-3 border-success ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">
        <h3>Агробио</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('onas') }}">{{ ('О нас') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('allbio') }}">{{ ('Биографии') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('news') }}">{{ ('Новости') }}</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="">{{ __('Избранное') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('user') }}">{{ __('Профиль') }}</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">{{ ('Выйти из акаунта') }}</a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          @endauth
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                    </ul>
                    </li>
                </ul>



            </div>

    </nav>


    <main class="py-4 ">
        @yield('content')
    </main>

    <div class="container">
      <footer class="py-3 my-4 border-top">
        <ul class="nav justify-content-center">
          <li class="nav-item"><a href="{{ route('index') }}" class="nav-link text-dark">Главная</a></li>
          <li class="nav-item"><a href="{{ route('news') }}" class="nav-link text-dark">Новости</a></li>
          <li class="nav-item"><a href="{{ route('onas') }}" class="nav-link text-dark">О нас</a></li>
        </ul>
        <p class="text-center text-muted mt-3 mb-0">© Agrobio, {{ date('Y') }}</p>
      </footer>
    </div>
</body>

</html>
