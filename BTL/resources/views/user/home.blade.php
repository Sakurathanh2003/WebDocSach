
@extends('layouts.app')

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
                        <main class="row slider d-block">
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien"
                                        title="Trở Thành Hậu Thuẫn Của Kẻ Phản Diện">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s18531-a4bb3bf9-45fc-424b-b15a-96182aad2909.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Trở Thành Hậu Thuẫn Của Kẻ Phản Diện"><a
                                                href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien"
                                                title="Trở Thành Hậu Thuẫn Của Kẻ Phản Diện">Trở Thành Hậu Thuẫn Của Kẻ
                                                Phản Diện</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18596-su-tro-lai-cua-tu-vuong-dung-si-mot-thoi-toi-bi-trieu-hoi-quay-lai-di-gioi-de-ngan-chan-to-chuc-bi-mat-chuni-do-chinh-minh-lap-ra"
                                        title="Sự Trở Lại của Thi Vương ~ Dũng Giả Một Thời, Tôi Bị Triệu Hồi Quay Lại Dị Giới Để Ngăn Chặn Hội Kín Chūni Do Chính Mình Lập Ra">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s18596-11429db0-84a6-4c09-996e-c84775eae546.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Sự Trở Lại của Thi Vương ~ Dũng Giả Một Thời, Tôi Bị Triệu Hồi Quay Lại Dị Giới Để Ngăn Chặn Hội Kín Chūni Do Chính Mình Lập Ra">
                                            <a href="/truyen/18596-su-tro-lai-cua-tu-vuong-dung-si-mot-thoi-toi-bi-trieu-hoi-quay-lai-di-gioi-de-ngan-chan-to-chuc-bi-mat-chuni-do-chinh-minh-lap-ra"
                                                title="Sự Trở Lại của Thi Vương ~ Dũng Giả Một Thời, Tôi Bị Triệu Hồi Quay Lại Dị Giới Để Ngăn Chặn Hội Kín Chūni Do Chính Mình Lập Ra">Sự
                                                Trở Lại của Thi Vương ~ Dũng Giả Một Thời, Tôi Bị Triệu Hồi Quay Lại Dị
                                                Giới Để Ngăn Chặn Hội Kín Chūni Do Chính Mình Lập Ra</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18298-my-housemaid-is-the-most-beautiful-girl-in-school"
                                        title="Cô Nàng Hoa Khôi Xinh Đẹp Nhất Trường Lại Chính Là Người Giúp Việc Của Nhà Tôi">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s18298-dfed4582-0917-41fe-ae50-07640606e809.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Cô Nàng Hoa Khôi Xinh Đẹp Nhất Trường Lại Chính Là Người Giúp Việc Của Nhà Tôi">
                                            <a href="/truyen/18298-my-housemaid-is-the-most-beautiful-girl-in-school"
                                                title="Cô Nàng Hoa Khôi Xinh Đẹp Nhất Trường Lại Chính Là Người Giúp Việc Của Nhà Tôi">Cô
                                                Nàng Hoa Khôi Xinh Đẹp Nhất Trường Lại Chính Là Người Giúp Việc Của Nhà
                                                Tôi</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi"
                                        title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s15461-6f3027bb-2ab8-4ce6-8419-d3bc5404d715.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi"><a
                                                href="/truyen/15461-bang-mot-cach-nao-do-dan-my-nhan-hang-s-lai-de-cap-den-toi"
                                                title="Không biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi">Không
                                                biết bằng cách nào, dàn mỹ nhân hạng S lại đề cập đến tôi</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18114-gia-dinh-toi-da-vut-bo-mot-thu-quan-trong-doi-voi-toi-va-toi"
                                        title="Gia đình tôi đã vứt bỏ một thứ quan trọng đối với tôi và tôi…">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://docln.net/img/nocover.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Gia đình tôi đã vứt bỏ một thứ quan trọng đối với tôi và tôi…"><a
                                                href="/truyen/18114-gia-dinh-toi-da-vut-bo-mot-thu-quan-trong-doi-voi-toi-va-toi"
                                                title="Gia đình tôi đã vứt bỏ một thứ quan trọng đối với tôi và tôi…">Gia
                                                đình tôi đã vứt bỏ một thứ quan trọng đối với tôi và tôi…</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan"
                                        title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s18741-893a5936-eb18-4b6f-ab33-81fdb9e36b8f.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">
                                            <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan"
                                                title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">Tôi
                                                Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/18126-co-gai-ket-noi-voi-soi-to-hong-thuc-chat-la-thien-dich-cua-doi-toi"
                                        title="Cô gái kết nối với [Sợi tơ hồng], thực chất là thiên địch của đời tôi">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i2.docln.net/ln/series/covers/s18126-8069472b-2fd4-43de-863d-3f4d20ad10f7.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title"
                                            title="Cô gái kết nối với [Sợi tơ hồng], thực chất là thiên địch của đời tôi">
                                            <a href="/truyen/18126-co-gai-ket-noi-voi-soi-to-hong-thuc-chat-la-thien-dich-cua-doi-toi"
                                                title="Cô gái kết nối với [Sợi tơ hồng], thực chất là thiên địch của đời tôi">Cô
                                                gái kết nối với [Sợi tơ hồng], thực chất là thiên địch của đời tôi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-thumb-item mr-1">
                                <div class="thumb-wrapper">
                                    <a href="/truyen/10793-reyandere" title="RE:Yandere">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio"
                                                style="background-image: url('https://i.docln.net/lightnovel/covers/s10793-0e73a258-348b-4177-b9bd-a842c002d817-m.jpg')">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr series-title" title="RE:Yandere"><a
                                                href="/truyen/10793-reyandere" title="RE:Yandere">RE:Yandere</a></div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer/c139120-chuong-40"
                                        title="Chương 40">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18639-6ea7b285-4b9b-4b99-9576-8cd471023d54.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 40"><a
                                                href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer/c139120-chuong-40"
                                                title="Chương 40">Chương 40</a></div>
                                        <div class="thumb_attr volume-title">Vol.1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18639-that-time-ive-seen-through-a-beautiful-gyarus-punishment-game-confession-i-forgave-her-but-she-started-to-get-closer"
                                        title="That Time I’ve Seen Through a Beautiful Gyaru’s Punishment Game Confession, I Forgave Her but She Started to Get Closer">That
                                        Time I’ve Seen Through a Beautiful Gyaru’s Punishment Game Confession, I Forgave
                                        Her but She Started to Get Closer</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18751-aaaaaaaaaaaa/c139119-chuong-01-an-tich-cua-nguoi-hung"
                                        title="Chương 01 Ấn Tích của Người Hùng">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://docln.net/img/nocover.jpg"></div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 01 Ấn Tích của Người Hùng"><a
                                                href="/truyen/18751-aaaaaaaaaaaa/c139119-chuong-01-an-tich-cua-nguoi-hung"
                                                title="Chương 01 Ấn Tích của Người Hùng">Chương 01 Ấn Tích của Người
                                                Hùng</a></div>
                                        <div class="thumb_attr volume-title">Tập 01 Ấn Tích của Người Hùng</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/18751-aaaaaaaaaaaa"
                                        title="魔術師クノンは見えている">魔術師クノンは見えている</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18187-nu-hoang-bach-long-muon-bien-toi-thanh-cong-chua-thien-bach-ngoc/c139114-chuong-28-rong-dat-nuolai"
                                        title="Chương 28: Rồng đất Nuolai">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18187-bccdf31d-b7ce-4659-b471-b96680f798d9.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 28: Rồng đất Nuolai"><a
                                                href="/truyen/18187-nu-hoang-bach-long-muon-bien-toi-thanh-cong-chua-thien-bach-ngoc/c139114-chuong-28-rong-dat-nuolai"
                                                title="Chương 28: Rồng đất Nuolai">Chương 28: Rồng đất Nuolai</a></div>
                                        <div class="thumb_attr volume-title">Vol 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18187-nu-hoang-bach-long-muon-bien-toi-thanh-cong-chua-thien-bach-ngoc"
                                        title="Công chúa Bạch long muốn biến tôi thành công chúa thiên bạch ngọc.">Công
                                        chúa Bạch long muốn biến tôi thành công chúa thiên bạch ngọc.</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/16466-throne-of-magical-arcana/c139113-chuong-383-khac-thuong"
                                        title="Chương 383 - Khác thường">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s16466-6c945c81-0712-4380-9d67-2384a0c17e61-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 383 - Khác thường"><a
                                                href="/truyen/16466-throne-of-magical-arcana/c139113-chuong-383-khac-thuong"
                                                title="Chương 383 - Khác thường">Chương 383 - Khác thường</a></div>
                                        <div class="thumb_attr volume-title">Vol 05 - Trăng đỏ (325-507)</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/16466-throne-of-magical-arcana"
                                        title="Throne of Magical Arcana">Throne of Magical Arcana</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan/c139111-chuong-10-vong-lap"
                                        title="Chương 50: Vòng Lặp">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18741-893a5936-eb18-4b6f-ab33-81fdb9e36b8f.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 50: Vòng Lặp"><a
                                                href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan/c139111-chuong-10-vong-lap"
                                                title="Chương 50: Vòng Lặp">Chương 50: Vòng Lặp</a></div>
                                        <div class="thumb_attr volume-title">Đệ Nhị Chương</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan"
                                        title="Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.">Tôi
                                        Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần.</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18745-why-are-you-so-obsessed-with-rejecting-love/c139110-chuong-02"
                                        title="Chương 02">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18745-93e995da-de32-4bdc-ab32-56e46be5ffbe.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 02"><a
                                                href="/truyen/18745-why-are-you-so-obsessed-with-rejecting-love/c139110-chuong-02"
                                                title="Chương 02">Chương 02</a></div>
                                        <div class="thumb_attr volume-title">Tập 01</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18745-why-are-you-so-obsessed-with-rejecting-love"
                                        title="Tại sao bạn lại bị ám ảnh bởi việc từ chối tình yêu?">Tại sao bạn lại bị
                                        ám ảnh bởi việc từ chối tình yêu?</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18111-nichiasa-reincarnation-ve-chuyen-mot-otaku-cuong-sieu-anh-hung-bi-chuyen-sinh-thanh-nhan-vat-phan-dien/c139107-chuong-75-nhat-ki-thanh-xuan-cua-claire-phan-3"
                                        title="Chương 75 : Nhật kí thanh xuân của Claire (Phần 3)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18111-a7935ad8-bc82-443a-9446-2459ca5369dd.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 75 : Nhật kí thanh xuân của Claire (Phần 3)"><a
                                                href="/truyen/18111-nichiasa-reincarnation-ve-chuyen-mot-otaku-cuong-sieu-anh-hung-bi-chuyen-sinh-thanh-nhan-vat-phan-dien/c139107-chuong-75-nhat-ki-thanh-xuan-cua-claire-phan-3"
                                                title="Chương 75 : Nhật kí thanh xuân của Claire (Phần 3)">Chương 75 :
                                                Nhật kí thanh xuân của Claire (Phần 3)</a></div>
                                        <div class="thumb_attr volume-title">Phụ truyện : Nhật kí của Claire</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18111-nichiasa-reincarnation-ve-chuyen-mot-otaku-cuong-sieu-anh-hung-bi-chuyen-sinh-thanh-nhan-vat-phan-dien"
                                        title="Nichiasa Reincarnation – Về chuyện một Otaku cuồng siêu anh hùng bị chuyển sinh thành nhân vật phản diện.">Nichiasa
                                        Reincarnation – Về chuyện một Otaku cuồng siêu anh hùng bị chuyển sinh thành
                                        nhân vật phản diện.</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18750-toi-hon-hit-voi-co-hoc-sinh-ma-neu-bi-phat-hien-thi-se-toang/c139106-illustration"
                                        title="Illustration">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18750-8be93667-7b82-47ce-a577-d04ddd5cf0e8.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Illustration"><a
                                                href="/truyen/18750-toi-hon-hit-voi-co-hoc-sinh-ma-neu-bi-phat-hien-thi-se-toang/c139106-illustration"
                                                title="Illustration">Illustration</a></div>
                                        <div class="thumb_attr volume-title">Tập 01</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18750-toi-hon-hit-voi-co-hoc-sinh-ma-neu-bi-phat-hien-thi-se-toang"
                                        title="Tôi hôn hít với cô học sinh mà nếu bị phát hiện thì sẽ toang">Tôi hôn
                                        hít với cô học sinh mà nếu bị phát hiện thì sẽ toang</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/10793-reyandere/c139104-chuong-881-lua-chon-30"
                                        title="Chương 881: Lựa chọn (30)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s10793-0e73a258-348b-4177-b9bd-a842c002d817-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 881: Lựa chọn (30)"><a
                                                href="/truyen/10793-reyandere/c139104-chuong-881-lua-chon-30"
                                                title="Chương 881: Lựa chọn (30)">Chương 881: Lựa chọn (30)</a></div>
                                        <div class="thumb_attr volume-title">Tập 12: Bắt đầu từ số 0</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/10793-reyandere"
                                        title="RE:Yandere">RE:Yandere</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien/c139102-chuong-62"
                                        title="Chương 62">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18531-a4bb3bf9-45fc-424b-b15a-96182aad2909.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 62"><a
                                                href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien/c139102-chuong-62"
                                                title="Chương 62">Chương 62</a></div>
                                        <div class="thumb_attr volume-title">EP 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18531-tro-thanh-hau-thuan-cua-ke-phan-dien"
                                        title="Trở Thành Hậu Thuẫn Của Kẻ Phản Diện">Trở Thành Hậu Thuẫn Của Kẻ Phản
                                        Diện</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18725-hoi-ket-danh-cho-thanh-nu-ao-uoc-duoc-chet/c139096-ma-nhan-dang-a-009-3"
                                        title="１── Mã Nhận Dạng A - 009 (3)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18725-67b02d91-f6a1-48cc-8c30-da97ba51f71b.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="１── Mã Nhận Dạng A - 009 (3)"><a
                                                href="/truyen/18725-hoi-ket-danh-cho-thanh-nu-ao-uoc-duoc-chet/c139096-ma-nhan-dang-a-009-3"
                                                title="１── Mã Nhận Dạng A - 009 (3)">１── Mã Nhận Dạng A - 009 (3)</a>
                                        </div>
                                        <div class="thumb_attr volume-title">Web Novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18725-hoi-ket-danh-cho-thanh-nu-ao-uoc-duoc-chet"
                                        title="Hồi kết viên mãn cho Thánh Nữ ao ước được chết">Hồi kết viên mãn cho
                                        Thánh Nữ ao ước được chết</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18647-breakers/c139095-chuong-119-chapter-20-cuoc-dot-kich-1"
                                        title="Chương 118 - Chapter 20 : Cuộc đột kich #1">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18647-ca3ef595-2e8c-4d1b-b704-204c42bd5cc1.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 118 - Chapter 20 : Cuộc đột kich #1"><a
                                                href="/truyen/18647-breakers/c139095-chuong-119-chapter-20-cuoc-dot-kich-1"
                                                title="Chương 118 - Chapter 20 : Cuộc đột kich #1">Chương 118 - Chapter
                                                20 : Cuộc đột kich #1</a></div>
                                        <div class="thumb_attr volume-title">Chapter 20</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a href="/truyen/18647-breakers"
                                        title="BREAKERS">BREAKERS</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18189-takane-san-chang-phai-la-thich-cau-roi-sao/c139093-chuong-51-pov-majima-kengo"
                                        title="Chương 5.1: POV Majima Kengo">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18189-913da108-7f74-4437-be8c-67dee66a1ba5.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title" title="Chương 5.1: POV Majima Kengo"><a
                                                href="/truyen/18189-takane-san-chang-phai-la-thich-cau-roi-sao/c139093-chuong-51-pov-majima-kengo"
                                                title="Chương 5.1: POV Majima Kengo">Chương 5.1: POV Majima Kengo</a>
                                        </div>
                                        <div class="thumb_attr volume-title">Vol 1</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18189-takane-san-chang-phai-la-thich-cau-roi-sao"
                                        title="Takane-san, chẳng phải là thích cậu rồi sao">Takane-san, chẳng phải là
                                        thích cậu rồi sao</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc/c139084-chuong-01-chien-dich-dot-kich-ma-vuong-thanh"
                                        title="Chương 01 Chiến dịch đột kích Ma vương thành">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s18749-142cda65-3888-4df7-8293-7f73e1a7472b.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 01 Chiến dịch đột kích Ma vương thành"><a
                                                href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc/c139084-chuong-01-chien-dich-dot-kich-ma-vuong-thanh"
                                                title="Chương 01 Chiến dịch đột kích Ma vương thành">Chương 01 Chiến
                                                dịch đột kích Ma vương thành</a></div>
                                        <div class="thumb_attr volume-title">Web novel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18749-ma-vuong-tu-zilbagias-cach-de-that-ma-vuong-tu-lat-do-ma-quoc"
                                        title="Ma vương tử Zilbagias: cách Đệ thất Ma vương tử lật đổ Ma quốc">Ma vương
                                        tử Zilbagias: cách Đệ thất Ma vương tử lật đổ Ma quốc</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai/c139083-chuong-22-nu-hoang-tao-bao"
                                        title="Chương 2.2: Nữ hoàng táo bạo (2)">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i2.docln.net/ln/series/covers/s16975-46dc2789-639e-4d2e-9b17-5b67200cb4e8.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 2.2: Nữ hoàng táo bạo (2)"><a
                                                href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai/c139083-chuong-22-nu-hoang-tao-bao"
                                                title="Chương 2.2: Nữ hoàng táo bạo (2)">Chương 2.2: Nữ hoàng táo bạo
                                                (2)</a></div>
                                        <div class="thumb_attr volume-title">Light Novel Tập 2 [ĐANG TIẾN HÀNH]</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/16975-koukou-jidai-ni-gouman-datta-joou-sama-to-no-dousei-seikatsu-wa-igaito-igokochi-ga-warukunai"
                                        title="Sống chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến thế">Sống
                                        chung với Nữ hoàng kiêu ngạo thời cao trung hoá ra lại không hề khó chịu đến
                                        thế</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/18734-cuoc-song-cham-rai-cua-gia-kim-thuat-su-cung-co-be-yandere-elf/c139082-chuong-20-mien-la-anh-co-em-o-ben"
                                        title="Chương 20: Miễn là anh có em ở bên.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://docln.net/img/nocover.jpg"></div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 20: Miễn là anh có em ở bên."><a
                                                href="/truyen/18734-cuoc-song-cham-rai-cua-gia-kim-thuat-su-cung-co-be-yandere-elf/c139082-chuong-20-mien-la-anh-co-em-o-ben"
                                                title="Chương 20: Miễn là anh có em ở bên.">Chương 20: Miễn là anh có
                                                em ở bên.</a></div>
                                        <div class="thumb_attr volume-title">Web Novel [01 - 30]</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/18734-cuoc-song-cham-rai-cua-gia-kim-thuat-su-cung-co-be-yandere-elf"
                                        title="Cuộc sống chậm rãi của giả kim thuật sư cùng cô bé yandere elf">Cuộc
                                        sống chậm rãi của giả kim thuật sư cùng cô bé yandere elf</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                <div class="thumb-wrapper ln-tooltip">
                                    <a href="/truyen/15289-dantoudai-ni-kieta-densetsu-no-akujo-nidome-no-jinsei-de-wa-gariben-jimi-megane-ni-natte-heion-wo-nozomu/c139079-chuong-11-cuoi-cung-con-gai-cua-ba-tuoc-cung-xuat-hien"
                                        title="Chương 11 :Cuối cùng, con gái của Bá Tước cũng xuất hiện.">
                                        <div class="a6-ratio">
                                            <div class="content img-in-ratio lazyload"
                                                data-bg="https://i.docln.net/lightnovel/covers/s15289-d39066d2-c61b-40d7-94f8-b307d54040c9-m.jpg">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="thumb-detail">
                                        <div class="thumb_attr chapter-title"
                                            title="Chương 11 :Cuối cùng, con gái của Bá Tước cũng xuất hiện."><a
                                                href="/truyen/15289-dantoudai-ni-kieta-densetsu-no-akujo-nidome-no-jinsei-de-wa-gariben-jimi-megane-ni-natte-heion-wo-nozomu/c139079-chuong-11-cuoi-cung-con-gai-cua-ba-tuoc-cung-xuat-hien"
                                                title="Chương 11 :Cuối cùng, con gái của Bá Tước cũng xuất hiện.">Chương
                                                11 :Cuối cùng, con gái của Bá Tước cũng xuất hiện.</a></div>
                                        <div class="thumb_attr volume-title">Webnovel</div>
                                    </div>
                                </div>
                                <div class="thumb_attr series-title"><a
                                        href="/truyen/15289-dantoudai-ni-kieta-densetsu-no-akujo-nidome-no-jinsei-de-wa-gariben-jimi-megane-ni-natte-heion-wo-nozomu"
                                        title="Dantoudai ni Kieta Densetsu no Akujo, Nidome no Jinsei de wa Gariben Jimi Megane ni Natte Heion wo Nozomu">Dantoudai
                                        ni Kieta Densetsu no Akujo, Nidome no Jinsei de wa Gariben Jimi Megane ni Natte
                                        Heion wo Nozomu</a></div>
                            </div>

                            <div class="thumb-item-flow col-4 col-lg-2 see-more">
                                <div class="thumb-wrapper">
                                    <div class="a6-ratio">
                                        <div class="content img-in-ratio"
                                            style="background-image: url('img/nocover.jpg');"></div>
                                    </div>
                                    <a href="https://docln.net/danh-sach?truyendich=1&amp;sapxep=capnhat">
                                        <div class="thumb-see-more">
                                            <div class="see-more-inside">
                                                <div class="see-more-content">
                                                    <div class="see-more-icon"><i
                                                            class="fas fa-arrow-circle-right"></i></div>
                                                    <div class="see-more-text">Xem thêm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
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