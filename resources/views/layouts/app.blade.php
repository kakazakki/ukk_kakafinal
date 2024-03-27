
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KZ7</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Photo||Gallery</title>

    <style>
        footer {
            position: absolute;
            bottom: absolute;
            width: 100%;
            background-color: #f8f9fa; /* Pilih warna sesuai keinginan */
            padding: 10px 0;
            text-align: center;
        }
    </style>

</head>
<body>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                    <img src="{{ asset('images/kai.jpg') }}" alt="Logo" style="width: 60px; height: 80px; margin-right: 10px;">
                  <a class="navbar-brand" href="#">Kaka's Gallery  |</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/albums">Albums</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/albums/create">Buat Albums</a>
                      </li>
                    </ul>
                  </div>
                </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="nav-link" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <button type="button" class="btn btn-danger">Logout</button>
                                </a>
                            </li>
                    </div>
              </nav>

            <main class="py-4">
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
            </main>
        </div>

        <footer>
<strong>Copyright &copy; 2023-2024 <a href="#">Kaka's Gallery</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
</div>
        </footer>
</body>
</html>
