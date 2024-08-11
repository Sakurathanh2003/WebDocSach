<!DOCTYPE html>
<html lang="vi" class="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $chapter->book->title . $chapter->title }}</title>

    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="w75Ttei8U9oP85oP0jMPdEdkhBaBvIkJriuV9MzS">
    <meta name="logged-in" content="0">
    <meta property="fb:app_id" content="1864643850436909">

    <meta property="og:image"
        content="https://i2.docln.net/ln/series/covers/s18741-893a5936-eb18-4b6f-ab33-81fdb9e36b8f.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora&family=Merriweather&family=Noto+Sans&family=Nunito&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preload" href="/fonts/OpenSans-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="/fonts/OpenSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin="anonymous">

    <link rel="shortcut icon" href="/img/favicon.png?v=3">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon.png?v=3">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png?v=3">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png?v=3">

    <link rel="stylesheet" href="/css/interface.css">
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous" />


    <script src="/scripts/plugins.js"></script>
</head>

<body>

    <style>
        body {
            background: inherit;
        }

        #footer {
            display: none;
        }
    </style>


    <main id="mainpart" class="reading-page style-4">
        <section id="rd-side_icon" class="none force-block-l">

            <a class="rd_sd-button_item rd_top-left {{ $chapter->previousChapter() != null ? '' : 'disabled' }}"
                href="/book/{{ $chapter->bookID }}/{{ $chapter->previousChapter() != null ? $chapter->previousChapter()->id : '' }}"
                >
                <i class="fas fa-backward"></i>
            </a>

            <a class="rd_sd-button_item"
                href="/book/{{ $chapter->bookID }}"><i
                    class="fas fa-home"></i></a>
            
                    <a class="rd_sd-button_item rd_top-right {{ $chapter->nextChapter() != null ? '' : 'disabled' }}"
                        href="/book/{{ $chapter->bookID }}/{{ $chapter->nextChapter() != null ? $chapter->nextChapter()->id : '' }}"><i
                    class="fas fa-forward"></i></a>
        </section>

        <div class="container">
            <div class="row">
                <div class="reading-content col-12 col-lg-10 offset-lg-1" style="word-wrap: break-word;">
                    <div class="title-top" style="padding-top: 20px">
                        <h2 class="title-item text-xl font-bold" align="center">{{ 'Chương ' . $chapter->order }}</h2>
                        <h4 class="title-item text-base font-bold" align="center">{{ $chapter->title }}</h4>
                    </div>

                    <div style="text-align: center; margin: 20px auto -20px auto;">
                    </div>

                    <div id="chapter-content" class="long-text no-select text-justify">
                        <p>{!! nl2br(e($chapter->content)) !!}</p>
                    </div>

                    <div style="text-align: center; margin: 20px auto 10px auto;">
                    </div>

                    <section class="rd-basic_icon row">
                        <a href="/book/{{ $chapter->bookID }}/{{ $chapter->previousChapter() != null ? $chapter->previousChapter()->id : '' }}"
                            class="dark:text-black col text-center  {{ $chapter->previousChapter() != null ? '' : 'disabled' }} "><i class="fas fa-backward"></i></a>

                        <a href="/book/{{ $chapter->bookID }}"
                            class="dark:text-black col text-center"><i class="fas fa-home"></i></a>

                        <a href="/book/{{ $chapter->bookID }}/{{ $chapter->nextChapter() != null ? $chapter->nextChapter()->id : '' }}"
                            class="dark:text-black col text-center {{ $chapter->nextChapter() != null ? '' : 'disabled' }}"><i class="fas fa-forward"></i></a>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer">
    </footer>
</body>

</html>
