<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
        content="Đọc Light Novel online, bình luận Light Novel. Thư viện Light Novel Tiếng Việt lớn nhất, chất lượng cao, cập nhật liên tục, nhiều chức năng hỗ trợ việc đọc truyện dễ dàng.">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="logged-in" content="0">
    <meta property="fb:app_id" content="1864643850436909">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="canonical" href="https://docln.net">
    <meta property="og:image" content="https://docln.net/img/nocover.jpg">
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/OpenSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preconnect" href="https://www.google-analytics.com">

    <link rel="shortcut icon" href="/img/favicon.png?v=3">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon.png?v=3">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png?v=3">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png?v=3">

    <link rel="stylesheet" href="/css/interface.css">
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />

    <script src="/scripts/plugins.js?id=b612d946b32459430eed3066ed15adf2"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34864968-3"></script>
</head>
<body>
    <div id="app">
        <div id="navbar" class="headroom">
            <div class="container">
                <div class="navbar-logo-wrapper">
                    <a href="/" class="navbar-logo" style="background-image: url('/img/logo-9.png')"
                        title="Trang chủ"></a>
                </div>
    
                <div id="navbar-user" class="guest">
                    @guest
                        @if (Route::has('login'))
                            <a class="login-link" href="{{ route('login') }}">Đăng nhập</a>
                        @endif

                        @if (Route::has('register'))
                            <a class="login-link" href="{{ route('register') }}">Đăng kí tài khoản</a>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
                <div class="navbar-mainblock">
                    <div class="navbar-search none block-m">
                        <form class="" action="/tim-kiem" method="get">
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords"
                                value="">
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
