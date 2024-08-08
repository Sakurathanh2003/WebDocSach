{{-- <!DOCTYPE html>
<html lang="vi" class="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tôi Bị Cô Gái Yandere Ẩn Mình Trong Ngục Tối Giết Chết Vô Số Lần. - Cổng Light Novel - Đọc Light Novel</title>

    <meta name="description" content="&quot;Do tội danh giết người, bị cáo Kiska bị đày vào vùng sâu nhất của ngục tối.&quot; Thẩm phán đã tuyên bố như vậy. Kiska bị đày vào vùng sâu nhất của ngục tối qua trận pháp dịch chuyển, mặc dù bị oan. Kiska bị làng ngược đãi vì có...">
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="rxBlpmrls80EjEbxdSjWdsA28X8lMloQjaSaJwpU">
    <meta name="logged-in" content="0">
    <meta property="fb:app_id" content="1864643850436909">

    <link rel="canonical" href="https://docln.net/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan">
    <meta property="og:image" content="https://i2.docln.net/ln/series/covers/s18741-893a5936-eb18-4b6f-ab33-81fdb9e36b8f.jpg">
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/OpenSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preconnect" href="https://www.google-analytics.com">

    <link rel="shortcut icon" href="/img/favicon.png?v=3">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon.png?v=3">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png?v=3">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png?v=3">

    <link rel="stylesheet" href="/css/interface.css?id=ead911cd7afa37e8c4aa85e2b6ef245b">
    <link rel="stylesheet" href="/css/tailwind.css?id=efb929a134ced6dfa20cb65d538b590d">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />


    <script src="/scripts/plugins.js?id=b612d946b32459430eed3066ed15adf2"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34864968-3"></script>
</head> --}}
@extends('layouts.user.app')

@section('content')
    <div>
        <div id="page-top"></div>
        <div data-scrollto="#page-top" class="backtoTop"><i class="fas fa-angle-double-up"></i></div>
        <div class="page-top-group ">
            <a href="/book/{{ $book->id }}">
                <div class="index-background d-none d-lg-block"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
                <div class="index-background d-lg-none"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover">
                </div>
            </a>
        </div>

        <main id="mainpart" class="project-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb">
                            <span class="breadcrum-level"><a href="/"><i class="fas fa-home"></i></a></span>
                            <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                            <span class="breadcrum-level"><a href="/">Sách</a></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-block clearfix">
                    <div class="col-12 col-lg-9 float-left">
                        <section class="feature-section at-series clear">
                            <main class="section-body">
                                <div class="top-part">
                                    <div class="row">
                                        <div class="left-column col-12 col-md-3">
                                            <div class="series-cover">
                                                <div class="series-type">
                                                    <span>Sách</span>
                                                </div>
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio">
                                                        <img src="{{ asset('public/uploads/sach/' . $book->image) }}"
                                                            alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9 flex flex-col">
                                            <div class="flex-1">
                                                <div class="series-name-group">
                                                    <span class="series-name">
                                                        <a href="/book/{{ $book->id }}">{{ $book->title }}</a>
                                                    </span>
                                                </div>
                                                <div class="series-information mb-0 flex flex-col">
                                                    <div class="info-item">
                                                        <span class="info-name">Tác giả:</span>
                                                        <span class="info-value "><a
                                                                href="">{{ $book->author }}</a></span>
                                                    </div>

                                                    <div class="info-item">
                                                        <span class="info-name"></span>
                                                        <span class="info-value">
                                                            <a href="https://docln.net/truyen-dang-tien-hanh"></a>
                                                        </span>
                                                    </div>

                                                    <a x-data="{ lastRead: (JSON.parse(localStorage.getItem('reading_series')) || []).filter(x => x['series_id'] == 18741) }" x-show="lastRead.length"
                                                        class="self-center md:self-start rounded-full bg-[#d9534f] mt-3 mb-3 px-4 py-2 text-sm font-semibold text-white hover:!text-red-400 shadow-sm hover:bg-red-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d43f3a] justify-center"
                                                        :href="lastRead[0] ? lastRead[0]['chapter_url'] : '#'"
                                                        style="display: none">Đọc tiếp</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-part">
                                    <div class="row">
                                        <div class="summary-wrapper col-12">
                                            <div class="series-summary">
                                                <h4 class="font-bold">Tóm tắt</h4>
                                                <div class="summary-content">
                                                    {{ $book->description }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </section>
                    </div>
                    <div class="col-12 col-lg-9 float-left">
                        <div style="text-align: center; margin: 0 auto 10px auto;">
                        </div>
                        <section class="volume-list at-series basic-section volume-mobile gradual-mobile ">
                            <header id="volume_25451" class="sect-header">
                                <span class="mobile-icon"><i class="fas fa-chevron-down"></i></span>
                                <span class="sect-title">
                                    Danh sách các chương <span style="color: red">*</span>
                                </span>
                            </header>
                            <main class="d-lg-block">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <div class="volume-cover">
                                            <a
                                                href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan/t25451-de-tam-chuong">
                                                <div class="a6-ratio">
                                                    <div class="content img-in-ratio">
                                                        <img src="{{ asset('public/uploads/sach/' . $book->image) }}"
                                                            alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <ul class="list-chapters">
                                            @foreach ($book->chapters()->get() as $chapter)
                                                <li class="">
                                                    <div class="chapter-name">
                                                        <a href="/book/{{ $book->id }}/{{ $chapter->id }}"
                                                            title="Chương {{ $chapter->order }}: {{ $chapter->title }}">{{ $chapter->title }}!</a>

                                                    </div>
                                                    <div class="chapter-time">{{ $chapter->created_at->format('d/m/Y') }}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </main>
                        </section>

                        <section id="series-comments" class="basic-section">
                            <header class="sect-header tab-list">
                                <span class="sect-title tab-title" data-tab-index="1">Tổng bình luận <span
                                        class="comments-count">({{ $book->reviews()->count() }})</span></span>
                            </header>
                            <main id="fbcmt_root" class="comment-wrapper d-lg-block clear">
                                <div id="tab-content-1" class="tab-content clear">
                                    <section class="ln-comment">
                                        <header>
                                            <h3 class="text-lg font-bold dark:text-white">{{ $book->reviews()->count() }} Bình luận </h3>
                                            <!-- <i id="refresh_comment" class="fas fa-refresh" aria-hidden="true" style="margin-left: 10px; font-size: 18px"></i></h3> -->
                                        </header>

                                        <main class="ln-comment-body">
                                            <div class="ln-comment_sign-in long-text">
                                                Bạn phải <a href="/login">đăng nhập</a> hoặc <a href="/register">tạo tài
                                                    khoản</a> để bình luận.
                                            </div>

                                            @foreach ($book->reviews() as $comment)
                                                <div class="ln-comment-group">
                                                    <div id="ln-comment-2534566" class="ln-comment-item mt-3 clear"
                                                        data-comment="2534566" data-parent="2534566">
                                                        <div class="flex gap-1 max-w-full">
                                                            <div class="w-[50px]">
                                                                <div class="mx-1 my-1">
                                                                    <img src="https://i.docln.net/lightnovel/users/ua22611-463ebb50-53c0-4205-9d8e-bdad96819ecd.jpg"
                                                                        class="w-full rounded-full" />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="w-full min-w-0 rounded-md bg-gray-100 ps-1 pe-0 pb-1 pt-0 dark:!bg-zinc-800 ">
                                                                <div class="flex min-w-0 flex-col px-2">
                                                                    <div class="flex align-top justify-between">
                                                                        <div
                                                                            class="flex flex-wrap gap-x-2 gap-y-1 align-middle pt-1">
                                                                            <div class="self-center">
                                                                                <a class="font-bold leading-6 md:leading-7 ln-username "
                                                                                    href="/thanh-vien/22611">OkitaItsuki</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ln-comment-content long-text">
                                                                        {{ $comment->content}}
                                                                    </div>
                                                                    <div class="comment_see_more expand none">Xem thêm</div>
                                                                    <div
                                                                        class="flex gap-2 align-bottom text-[13px] visible-toolkit">
                                                                        <a href="/truyen/18741-toi-bi-co-gai-yandere-an-minh-trong-nguc-toi-giet-chet-vo-so-lan?comment_id=2534566#ln-comment-2534566"
                                                                            class="text-slate-500">
                                                                            <time class="timeago" title="07-08-2024 23:11:48"
                                                                                datetime="2024-08-07T23:11:48+07:00">
                                                                                07-08-2024 23:11:48
                                                                            </time>
                                                                        </a>
                                                                        <a
                                                                            class="self-center visible-toolkit-item do-like cursor-pointer">
                                                                            <i class="fas fa-thumbs-up me-1"></i>
                                                                            <span class="likecount font-semibold"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                           
                                        </main>

                                        <script>
                                            var token = 'HW5xIdf2Cz6wluyJ3N3wWbHVGEowQuBZG3hklzFp';
                                            var comment_type = 'series';
                                            var comment_typeid = '18741';
                                        </script>

                                    </section>


                                </div>
                            </main>
                        </section>
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
        </footer>
    </div>
@endsection
