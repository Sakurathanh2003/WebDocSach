<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/interface.css">
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />

    <script src="/scripts/plugins.js"></script>

</head>
<body>
    <div id="app">
        <div id="navbar" class="headroom">
            <div class="container">
                <div id="sidenav-icon" class="none-xl">
                    <div class="sidenav-icon-content">
                        <span class="sidenav-icon_white"></span>
                        <span class="sidenav-icon_white"></span>
                        <span class="sidenav-icon_white"></span>
                    </div>
                    <ul class="navbar-menu none hidden-block at-mobile unstyle">
                        <div class="navbar-search block none-m in-navbar-menu">
                            <form class="" action="/tim-kiem" method="get">
                                <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                                <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
    
                        <li><a class="nav-menu_item" href="/listbook"><span class="">Danh sách</span></a></li>
    
                        <li class="nav-has-submenu">
                            <a class="nav-menu_item">
                                <span class="">Danh mục</span>
                                <i class="fas fa-chevron-down dropdown-icon" style="float: right; margin-top: 6px"></i>
                            </a>
    
                            <ul class="nav-submenu list-unstyled none">
                                @foreach ($categories as $category) 
                                    <li><a href="/category/{{ $category->id }}"><span>{{ $category->name }}</span></a></li>
                                @endforeach                            
                            </ul>
                        </li>
                    </ul>
                </div>
    
                <div class="navbar-logo-wrapper">
                    <a href="/" class="navbar-logo" style="background-image: url('/logo-9.png')" title="Trang chủ"></a>
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
                        <div id="guest-menu">
                            <div class="icon">
                                <span class="white-point"></span>
                                <span class="white-point"></span>
                                <span class="white-point"></span>
                            </div>
                            <ul class="nav-submenu hidden-block unstyled none">
                                <li class="li-inner">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <a class="login-link" href="/login"> {{ Auth::user()->name }}</a>
                    @endguest
                </div>
                <div class="navbar-mainblock">
                    <div class="navbar-search none block-m" style="display: none;">
                        <form class="" action="/tim-kiem" method="get">
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords" value="">
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <ul class="navbar-menu at-navbar none d-xl-block unstyled">            
                        <li><a class="nav-menu_item" href="/listbook"><i class="fas fa-th-list menu-icon"></i><span class="">Danh sách</span></a></li>
    
                        <li class="nav-has-submenu">
                            <a class="nav-menu_item">
                                <i class="fas fa-question menu-icon"></i><span class="">Danh mục</span>
                                <i class="fas fa-chevron-down dropdown-icon"></i>
                                <i class="fas fa-chevron-right dropdown-icon"></i>
                            </a>
    
                            <ul class="nav-submenu hidden-block unstyled none">
                                @foreach ($categories as $category) 
                                    <li><a href="/category/{{ $category->id }}"><span>{{ $category->name }}</span></a></li>
                                @endforeach       
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
