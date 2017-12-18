@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')
    <section class="page-banner"></section>

    <section class="banner">
        <div class="container">
            <div class="row text-center banner">
                <div class="col-lg-12">
                    <h1 class="white italic font-weight-400">Our Healthy Mixes</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="our-mixes">

        <div class="container">

            <div class="mixes-slider-wrapper">
                <div class="row mixes" data-slider-name="mixes-slider">

                    <a class="prev"><</a>

                    @foreach($mixes as $mix)
                        <div class="col-lg-12 mix text-center">
                            <img src="{{Voyager::image($mix->image)}}" alt="" class="img-fluid"/>
                            <div class="content">
                                <h2 class="font-weight-300 orange">{{$mix->name}}</h2>
                                <div class="description">
                                    <div class="text-1">{!! ($mix->description) !!}</div>
                                    @php
                                        $productsNames = '';
                                    @endphp
                                    @foreach($mix->products as $product)
                                        @php
                                            $productsNames .= $product->name . ', ';
                                        @endphp
                                    @endforeach
                                        <p class="brown ingredients italic">{{rtrim($productsNames, ', ')}}</p>
                                </div>
                            </div>

                            <div class="row justify-content-center ingredients-images">
                                @foreach($mix->products as $product)
                                    <img src="{{Voyager::image($product->image)}}" alt="" class="img-fluid"/>
                                @endforeach
                            </div>

                        </div>
                    @endforeach

                    <a class="next">></a>

                </div>

            </div>
        </div>
    </section>

@endsection