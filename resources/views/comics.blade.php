<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <div class="w-100 es_container g-0">

        <div class="row w-100 m-0 row-cols-1 es_jumbotron"></div>

        <div class="row w-100 m-0 row-cols-1 section-padding es_comicontainer">

        <h2 class="current-series">CURRENT SERIES</h2>

            @foreach($comicard as $key => $comicardsingle)

            <div class="col-2"><a href="#" class="es_cardlink">
                <div class="card h-100 border-0 es_card">
                    <img src="{{ $comicardsingle['thumb'] }}" class="card-img-top" alt="{{ $comicardsingle['title'] }}">
                    <div class="card-body px-0">
                        <h6 class="card-title">{{ $comicardsingle['title'] }}</h6>
                    </div>
                </div>
            </a></div>

            @endforeach

            <div class="w-100 text-center mt-3"><button class="load-more">LOAD MORE</button></div>

        </div>

    </div>

    @include('partials.footer')

</body>
</html>