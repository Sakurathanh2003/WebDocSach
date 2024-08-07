
@extends('layouts.user.app')

@section('content')
<body>
    <div id="page-top"></div>
    <div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
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
                            <input class="search-input" type="text" placeholder="Tối thiểu 2 kí tự" name="keywords"
                                value="">
                            <button class="search-submit" type="submit" value="Tìm kiếm"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>


                    <li><a class="nav-menu_item" href="/xuat-ban"><span class="">Xuất bản</span></a></li>
                    <li><a class="nav-menu_item" href="/danh-sach"><span class="">Danh sách</span></a></li>
                </ul>
            </div>

            <div class="navbar-logo-wrapper">
                <a href="/" class="navbar-logo" style="background-image: url('/img/logo-9.png')"
                    title="Trang chủ"></a>
            </div>

            <div id="navbar-user" class="guest">
                <a class="login-link" href="/login">Đăng nhập</a>
                <div id="guest-menu">
                    <div class="icon">
                        <span class="white-point"></span>
                        <span class="white-point"></span>
                        <span class="white-point"></span>
                    </div>
                    <ul class="nav-submenu hidden-block unstyled none">
                        <li>
                            <div class="nightmode-toggle li-inner">
                                <span><i class="fas fa-moon"></i>Nền tối</span>
                                <div class="toggle-icon">
                                    <i class="fa fa-toggle-off"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="li-inner" href="/lich-su-doc"><i class="fas fa-history"></i><span>Lịch
                                    sử</span></a>
                        </li>
                    </ul>
                </div>
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
    <div class="page-top-group  at-index ">
        <a href="/truyen/13957">
            <div class="index-background d-none d-lg-block"
                style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
            <div class="index-background d-lg-none"
                style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover">
            </div>
        </a>
    </div>

    <main id="mainpart" class="at-index">
        <div class="container" style="margin-bottom: 40px;">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="daily-recent_views">
                        <header class="title">
                            <span class="top-tab_title title-active"><i class="fas fa-trophy"></i> Nổi bật</span>
                            <span class="top-tab_title"><a
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=topthang">Top
                                    tháng</a></span>
                            <span class="top-tab_title"><a
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=top">Toàn
                                    t/gian</a></span>
                        </header>
                        <main class="row d-block">
                            @foreach ($newbooks['books'] as $book)
                                <div class="popular-thumb-item mr-1">
                                    <div class="thumb-wrapper">
                                        <a href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien"
                                            title="{{ $book->title }}">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio">
                                                    <img src="{{ asset('public/uploads/sach/'.$book['image']) }}" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr series-title" title="{{ $book->title }}">
                                                <a
                                                    href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien"
                                                    title="{{ $book->title }}">{{ $book->title }}</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </main>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <section class="index-section thumb-section-flow last-chapter translation three-row">
                        <header class="section-title">
                            <span class="sts-bold">Chương</span><span class="sts-empty">mới nhất</span>
                        </header>
                        <main class="row">
                            @foreach ($newchapters as $chapter)
                                <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                    <div class="thumb-wrapper ln-tooltip">
                                        <a href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer/c139120-chuong-40"
                                            title="Chương 40">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload">
                                                    <img src="{{ asset('public/uploads/sach/'.$chapter->book->image) }}" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 40"><a
                                                    href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer/c139120-chuong-40"
                                                    title="{{ 'Chương '.$chapter->order }}">{{ 'Chương '.$chapter->order }}</a></div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer">{{ $chapter->book->title }}</a></div>
                                </div>
                            @endforeach
                        </main>
                    </section>
                </div>
                
            </div>
        </div>

        <div style="text-align: center; margin: 0 auto 10px auto;">
        </div>

        <div class="bottom-part at-index">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-9">
                        <section class="index-section new-series">
                            <header class="section-title"><span class="sts-bold">Sách</span><span
                                    class="sts-empty">Vừa Đăng</span>
                            </header>
                            <main class="sect-body">
                                <div class="row">
                                    @foreach ($newbooks['books'] as $book)
                                        <article class="list-item list-none col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-4 col-md-3 col-lg-4">
                                                    <div class="series-cover">
                                                        <a href="/truyen/18751-aaaaaaaaaaaa">
                                                            <div class="a6-ratio">
                                                                <div class="content img-in-ratio lazyload"
                                                                    data-bg="https://docln.net/img/nocover.jpg">
                                                                    <img src="{{ asset('public/uploads/sach/'.$book['image']) }}" alt="" width="100%" height="100%">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-9 col-lg-8">
                                                    <div class="list-detail">
                                                        <h4 class="series-title text-xl font-bold"><a
                                                                href="/truyen/18751-aaaaaaaaaaaa">{{ $book['title'] }}</a></h4>
                                                        <div class="series-summary">{{ $book['description'] }}</div>
                                                        <div class="lastest-chapter">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach
                                   
                                    
                                </div>
                            </main>
                            <div class="see-more_cover">
                                <a class="see-more"
                                    href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=truyenmoi">
                                    <i class="fas fa-hand-point-right"></i>Xem thêm
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/scripts/app.js?id=e6bfa8f47769659b2c4d6e4752cc0d59"></script>
    <script src="/livewire/livewire.js?id=f121a5df" data-csrf="rxBlpmrls80EjEbxdSjWdsA28X8lMloQjaSaJwpU"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>


    <script async type='text/javascript' src='//pl16314303.highcpmgate.com/d5/6b/4b/d56b4bd6c3d2c1e161c4ab3c78c27670.js'>
    </script>


    <footer id="footer">
        <div class="container">
            <!--<span><a href="">Hako.re</a></span>-->
            
        </div>
    </footer>
</body>
@endsection