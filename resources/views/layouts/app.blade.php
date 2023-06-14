<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Agrobio.ru') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tiny.cloud/1/pj70c5ngtwqk3he3qucr78o2bp5ragj9v2k31p37o6een838/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border border-success border-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">

                <img src="/public/img/logotip.png" class="rounded-circle logo-wrapper  rounded-3" width="50"
                    height="50" alt="logotip">

                <span class=" p-2 navbar-text">Агробио</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('onas') }}">{{ __('О нас') }}</a>
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('allbio') }}">{{ __('Биографии') }}</a>
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('news') }}">{{ __('Новости') }}</a>
                    </li>
                    @Auth
                        <li>
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('showFavorites', ['user_id' => auth()->user()->id]) }}">{{ __('Избраное') }}</a>
                        </li>
                    @endAuth

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                    {{ __('Выйти из акаунта') }}
                                </a>
                                <a class="nav-link active " aria-current="page"
                                    href="{{ route('user') }}">{{ __('Профиль') }}</a></li>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
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

    <div class="container  ">
        <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('index') }}" class="nav-link px-2 text-muted">Главная</a></li>
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link px-2 text-muted">Новости</a></li>
                <li class="nav-item"><a href="{{ route('onas') }}" class="nav-link px-2 text-muted">О нас</a></li>

            </ul>
            <p class="text-center text-muted">© 2023 Dante Alegori</p>
        </footer>
    </div>
    
</body>

<script>
    tinymce.init({
        selector: 'textarea[name=childhood_live_content], textarea[name=stydent_live_content], textarea[name=osnovnaia_live_content], textarea[name=pensia_live_content], textarea[name=opisanie_deitelnosti], textarea[name=xp_for_work], textarea[name=achivments], textarea[name=nagradi], textarea[name=status], textarea[name=sourse],textarea[name=content],textarea[name=zagolovok],textarea[name=description]', // Replace this CSS selector to match the placeholder element for TinyMCE
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar: 'undo redo | formatselect | bold italic backcolor | aligncenter alignjustify | bullist numlist outdent indent | link | image | preview',
      content_css: '{{ asset('css/app.css') }}',
      init_instance_callback: function (editor) {
        editor.on('Change', function (e) {
          editor.save();
        });
      },
    });
  </script>
</html>
