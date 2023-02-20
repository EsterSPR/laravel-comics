@extends('layout.app')

@section('content')

    <div class="w-100 es_container g-0 es_comicpage">

        <div class="row w-100 m-0 row-cols-1 es_jumbotron"></div>

        <div class="row w-100 m-0 es_comicblue section-padding">
            <img src="{{ $single['thumb'] }}" class="es_comicover">
        </div>

        <div class="row w-100 m-0 es_comicwhite section-padding py-5">
            <div class="col-9">

                <div class="row">
                    <h2>{{ $single['title'] }}</h2>
                </div>

                <div class="row bg-success g-0 my-4">

                    <div class="col-5 p-3">
                        <span class="text-white-50">U.S. Price:</span> <span class="text-white">{{ $single['price'] }}</span>
                    </div>

                    <div class="col-4 text-end text-white-50 p-3 border-end">
                        AVAILABLE
                    </div>

                    <div class="col-3 p-3 text-center">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <p class="text-secondary">{{ $single['description'] }}</p>
                </div>

            </div>

            <div class="col-3">
                <div class="row text-secondary">ADVERTISEMENT</div>
                <a href="#"><div class="row es_ad"></div></a>
            </div>
        </div>

        <div class="row w-100 m-0 bg-light section-padding">

            <div class="col-6">

                <div class="row">
                    
                </div>

                <div class="row">
                    <div class="col-4"> Art by: </div>
                    <div class="col-8">  </div>
                </div>

                <div class="row">
                    <div class="col-4"> Written by: </div>
                    <div class="col-8">  </div>
                </div>
                
            </div>

            <div class="col-6">

                <div class="row">

                </div>

                <div class="row"></div>

                <div class="row"></div>
                
            </div>
            
        </div>

    </div>

@endsection