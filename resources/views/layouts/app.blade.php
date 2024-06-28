<!DOCTYPE html>
<html>
<head>
    <title>Mobank</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @if (!Request::is('login') && !Request::is('register'))
    <header class="bg-blue">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand logo" href="{{ route('cars.index') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
                    MoBank
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="{{ route('cars.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cars.index') }}#product">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cars.index') }}#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('purchases.index') }}">Purchase History</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="nav-item"><span class="nav-link">{{ Auth::user()->name }}</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        @if(!Request::is('login') && !Request::is('register') && !Request::is('cars/*') && !Request::is('purchases'))
        <div class="container-fluid px-0 banner">
            <img src="{{ asset('img/banner.jpg') }}" alt="Banner" class="img-fluid w-100 mt-4">
        </div>
        @endif
    </header>
    @endif
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
