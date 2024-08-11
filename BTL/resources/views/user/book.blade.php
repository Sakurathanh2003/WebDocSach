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
                                                        <span class="info-name">Số lượt xem:</span>
                                                        <span class="info-value "><a
                                                                href="">{{ $book->views()->count() }}</a></span>
                                                    </div>
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
                                                href="/book/{{ $book->id }}">
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
                                                <li>
                                                    <div>
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
                    </div>
                </div>
            </div>
        </main>

        <script src="/scripts/app.js"></script>
        <footer id="footer">
        </footer>
    </div>
@endsection
