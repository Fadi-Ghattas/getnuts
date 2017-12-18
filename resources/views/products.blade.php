@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'productsJson' => $productsJson ,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')
    <section class="page-banner"></section>


    <section class="banner">
        <div class="container">
            <div class="row text-center banner">
                <div class="col-lg-12">
                    <h1 class="white italic font-weight-400">Premium Quality, Natural & Delicious</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="products">

        <div class="container">


            <div class="row text-center banner">
                <div class="col-lg-12">
                    <a href="{{url('/our-mixes')}}">
                        <h1 class="green hover-brown italic font-weight-700">Checkout Our Healthy Mixes</h1>
                    </a>
                </div>
            </div>

            <div class="row message text-center">
                <div class="col-lg-12">
                    <p class="description text-1 italic">
                        "Get nuts over our healthy range of nuts"
                    </p>
                </div>
            </div>

            <div class="row filters justify-content-lg-center text-center">

                @foreach($productCategories as $category)

                    <div class="filter col">
                        <a href="" data-type="{{ $category->slug }}">
                            <img src="{{ Voyager::image( $category->icon ) }}" alt="" class=""/>
                            <img src="{{ Voyager::image( $category->icon_hoverd ) }}" alt="" class="hover"/>
                            <h5>{{ $category->name }}</h5>
                        </a>
                    </div>

                @endforeach

            </div>

            <div class="clear"></div>

            <div class=" row products products-slider" data-slider-name="products-slider">
                @foreach($products as $product)
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 product zoom-effect {{ $product->category()->first()->slug  }}">
                        <div class="thumbnail">
                            <img src="{{ Helpers::thumbnail(Voyager::image( $product->image), 'cropped') }}" alt="" class="img-fluid fadeIn"/>
                        </div>
                        <div class="content">
                            <h3 class="text-center title">{{ $product->name }}</h3>
                            <p class="benefits text-1">
                                <span class="">Benefits:</span>{{ Helpers::removeFirstParagraph($product->benefits)  }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row text-center banner">
                <div class="col-lg-12">
                    <a href="{{url('/our-mixes')}}">
                        <h1 class="green hover-brown italic font-weight-700">Checkout Our Healthy Mixes</h1>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection