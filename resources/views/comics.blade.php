<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <div class="container">

        <div class="row w-100 m-0 row-cols-1 g-4"></div>

        <div class="row w-100 m-0 row-cols-1 g-4">

            @foreach($comicard as $key => $comicardsingle)

            <div class="col-3"><a href="#">
                <div class="card h-100 border-0">
                    <img src="{{ $comicardsingle['thumb'] }}" class="card-img-top" alt="{{ $comicardsingle['title'] }}">
                    <div class="card-body px-0">
                        <h5 class="card-title es_cardlink">{{ $comicardsingle['title'] }}</h5>
                    </div>
                </div>
            </a></div>

            @endforeach

        </div>

    </div>

    @include('partials.footer')

</body>
</html>