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
    <main id="mainpart" class="at-index">
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
                                        <a href="/book/{{ $chapter->bookID }}/{{ $chapter->id }}"
                                            title="Chương 40">
                                            <div class="a6-ratio">
                                                <div class="content img-in-ratio lazyload">
                                                    <img src="{{ asset('public/uploads/sach/'.$chapter->book->image) }}" alt="" width="100%" height="100%">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="thumb-detail">
                                            <div class="thumb_attr chapter-title" title="Chương 40"><a
                                                    href="/book/{{ $chapter->bookID }}/{{ $chapter->id }}"
                                                    title="{{ 'Chương '.$chapter->order }}">{{ 'Chương '.$chapter->order }}</a></div>
                                        </div>
                                    </div>
                                    <div class="thumb_attr series-title"><a
                                            href="/book/{{ $chapter->book->id }}">{{ $chapter->book->title }}</a></div>
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
                                    class="sts-empty"></span>
                            </header>
                            <main class="sect-body">
                                <div class="row">
                                    @foreach ($newbooks['books'] as $book)
                                        <article class="list-item list-none col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-4 col-md-3 col-lg-4">
                                                    <div class="series-cover">
                                                        <a href="/book/{{ $book->id }}">
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
                                                                href="/book/{{ $book->id }}">{{ $book['title'] }}</a></h4>
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
                                    href="/listbook">
                                    <i class="fas fa-hand-point-right"></i>Xem thêm
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/scripts/app.js"></script>
    <footer id="footer">
        <div class="container">            
        </div>
    </footer>
</div>
@endsection