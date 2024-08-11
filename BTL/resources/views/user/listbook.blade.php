@extends('layouts.user.app')

@section('content')
    <div>
        <div class="page-top-group  at-index ">
            <a href="/truyen/13957">
                <div class="index-background d-none d-lg-block"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_d.png')"></div>
                <div class="index-background d-lg-none"
                    style="background-image: url('https://i2.docln.net/ln/banners/2024-06-23/13957_m.png'); background-size: cover">
                </div>
            </a>
        </div>
        <form method="get">
            <main id="mainpart" class="browser-page">
                <div style="text-align: center; margin: 0 auto 10px auto;">
                </div>

                <div class="container">
                    <div class="page-breadcrumb">
                        <span class="breadcrum-level"><a href="https://docln.net"><i class="fas fa-home"></i></a></span>
                        <span class="next-icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="breadcrum-level"><a href="/listbook">Danh sách</a></span>
                    </div>

                </div>

                <div class="container">
                    <div class="row d-block clear">
                        <div class="col-12 none d-lg-block col-lg-3 float-right filters-wrapper">
                            <div class="none-l pad-bottom-20 text-right pad-top-20">
                                <span class="js-off-filters-wrapper button button-red">Tắt bộ lọc</span>
                            </div>

                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Chữ cái</div>
                                </div>
                                <div class="browse-alphabet">
                                    <a class="alphabet_item  {{ isset($character) ? "" : "current" }} " href="/{{ $path }}">Tất cả</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "a" ? "current" : "" : "" }} " href="/{{ $path }}/a">A</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "b" ? "current" : "" : "" }}" href="/{{ $path }}/b">B</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "c" ? "current" : "" : "" }}" href="/{{ $path }}/c">C</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "d" ? "current" : "" : "" }}" href="/{{ $path }}/d">D</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "e" ? "current" : "" : "" }}" href="/{{ $path }}/e">E</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "f" ? "current" : "" : "" }}" href="/{{ $path }}/f">F</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "g" ? "current" : "" : "" }}" href="/{{ $path }}/g">G</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "h" ? "current" : "" : "" }}" href="/{{ $path }}/h">H</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "i" ? "current" : "" : "" }}" href="/{{ $path }}/i">I</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "j" ? "current" : "" : "" }}" href="/{{ $path }}/j">J</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "k" ? "current" : "" : "" }}" href="/{{ $path }}/k">K</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "l" ? "current" : "" : "" }}" href="/{{ $path }}/l">L</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "m" ? "current" : "" : "" }}" href="/{{ $path }}/m">M</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "n" ? "current" : "" : "" }}" href="/{{ $path }}/n">N</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "o" ? "current" : "" : "" }}" href="/{{ $path }}/o">O</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "p" ? "current" : "" : "" }}" href="/{{ $path }}/p">P</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "q" ? "current" : "" : "" }}" href="/{{ $path }}/q">Q</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "r" ? "current" : "" : "" }}" href="/{{ $path }}/r">R</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "s" ? "current" : "" : "" }}" href="/{{ $path }}/s">S</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "t" ? "current" : "" : "" }}" href="/{{ $path }}/t">T</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "u" ? "current" : "" : "" }}" href="/{{ $path }}/u">U</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "v" ? "current" : "" : "" }}" href="/{{ $path }}/v">V</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "w" ? "current" : "" : "" }}" href="/{{ $path }}/w">W</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "x" ? "current" : "" : "" }}" href="/{{ $path }}/x">X</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "y" ? "current" : "" : "" }}" href="/{{ $path }}/y">Y</a>
                                    <a class="alphabet_item {{ isset($character) ? $character == "z" ? "current" : "" : "" }}" href="/{{ $path }}/z">Z</a>

                                </div>
                            </section>

                            <section class="sub-index-style">
                                <div class="title-wrapper">
                                    <div class="section-title">Phân loại</div>
                                </div>
                                <div class="section-content">
                                    <ul class="filter-type unstyled clear">
                                        @foreach ($categories as $category) 
                                            <li class="filter-type_item"><a
                                                href="/category/{{ $category->id }}">{{ $category->name }}</a>
                                        @endforeach
                                    </ul>
                                </div>
                            </section>
                        </div>

                        <div class="col-12 float-left col-lg-9">
                            @php
                                if (isset($currentCategory)) {
                                    echo '<section class="sub-index-style">
                                            <div class="title-wrapper">
                                                <div class="section-title">Giới thiệu</div>
                                            </div>
                                            <div class="section-content">
                                               '.$currentCategory->name.'
                                            </div>
                                        </section>';
                                }
                            @endphp
                            
                            <section class="thumb-section-flow">
                                <main class="row">
                                    @foreach ($books as $key => $book)
                                        <div class="thumb-item-flow col-4 col-md-3 col-lg-2">
                                            <div class="thumb-wrapper ln-tooltip" data-tooltip-content="#series_{{ $book->id }}">
                                                <a href="/book/{{ $book->id }}"
                                                    title="{{ $book->title }}">
                                                    <div class="a6-ratio">
                                                        <div class="content img-in-ratio lazyload">
                                                            <img src="{{ asset('public/uploads/sach/' . $book->image) }}"
                                                                alt="" width="100%" height="100%">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="thumb-detail">
                                                    <div class="thumb_attr chapter-title"
                                                        title="{{ $book->title }}"><a
                                                            href="/book/{{ $book->id }}"
                                                            title="{{ $book->title }}">{{ $book->title }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="display: none">
                                            <div id="series_{{ $book->id }}">
                                                <div style="margin: 10px 0; width: 250px">
                                                    <p style="color: white; font-weight: bold">
                                                        {{ $book->title }}
                                                    </p>
                                                    <p>
                                                    <div>Lượt xem: {{ $book->views()->get()->count() }}</div>
                                                    </p>
                                                    {{ $book->description }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </main>
                            </section>
                        </div>
                    </div>
                </div>
            </main>
        </form>

        <script>
            $(document).ready(function() {
                $('.js-call-filters-wrapper').on('click', function() {
                    $('.filters-wrapper').toggle();
                    $('html').toggleClass('overflow-hiden');
                });
                $('.js-off-filters-wrapper').on('click', function() {
                    $('.filters-wrapper').hide();
                    $('html').removeClass('overflow-hiden');
                });

                tippy('.ln-tooltip', {
                    delay: 50,
                    maxWidth: 500,
                    interactive: false,
                    touch: ['hold', 1000],
                    placement: 'right',
                    ignoreAttributes: true,
                    content(ref) {
                        const selector = ref.getAttribute('data-tooltip-content');
                        const template = document.querySelector(selector);
                        return template.innerHTML;
                    },
                    onShow(instance) {
                        tippyHideAll({
                            exclude: instance
                        });
                    }
                });
            });
        </script>

        <script src="/scripts/app.js"></script>
        <footer id="footer">
        </footer>
    </div>
@endsection
