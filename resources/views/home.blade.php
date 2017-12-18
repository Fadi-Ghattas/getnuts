@extends('layouts.app',
        ['body_class' => $bodyClass,
         'productsJson' => $productsJson ,
         'title' => setting('site.title'). ' | ' . $PageTitle
         ])

@section('content')

    @include('includes.full-slider')

    <section class="welcome">
        <div class="container">

            <div class="row message text-center">
                <div class="col-lg-12">
                    <h1 class="title green italic font-weight-700">Welcome to Getnuts</h1>
                    <p class="description text-1">
                        <span class="italic">"Get nuts over our healthy range of nuts"</span>
                        <br/>
                        Getnuts is a lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                        gravida
                        <br/>
                        efficitur. In aliquet ipsum sit amet bibendum elementum.
                    </p>
                    <img src="{{url('/images/home/shutterstock.png')}}" class="img-fluid" alt=""/>
                </div>
            </div>

            <div class="row features text-center">

                <div class="col-md-4 col-lg-4 feature">
                    <div class="title">
                        <img src="{{url('/images/icons/forma.png')}}" alt="" class="img-fluid"/>
                        <img src="{{url('/images/icons/forma-hover.png')}}" alt="" class="img-fluid hover"/>
                        <h4 class="italic font-weight-700">100% Natural</h4>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                            gravida efficitur. In aliquet ipsum sit amet bibendum elementum.</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 feature">
                    <div class="title">
                        <img src="{{url('/images/icons/forma-1-3.png')}}" alt="" class="img-fluid"/>
                        <img src="{{url('/images/icons/forma-1-3-hover.png')}}" alt="" class="img-fluid hover"/>
                        <h4 class="italic">Fresh Indeed</h4>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                            gravida efficitur. In aliquet ipsum sit amet bibendum elementum.</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 feature">
                    <div class="title">
                        <img src="{{url('/images/icons/forma-1-2.png')}}" alt="" class="img-fluid"/>
                        <img src="{{url('/images/icons/forma-1-2-hover.png')}}" alt="" class="img-fluid hover"/>
                        <h4 class="italic">Premium Quality</h4>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                            gravida efficitur. In aliquet ipsum sit amet bibendum elementum.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

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

            <div class="row message text-center">
                <div class="col-lg-12">
                    <h1 class="title green italic font-weight-700">
                        Our Products
                    </h1>
                    <p class="description text-1">
                        Organic & Sweet, Nature's Candy
                    </p>
                </div>
            </div>

            <div class="row filters justify-content-lg-center text-center">

                @foreach($productCategories as $category)

                    <div class="filter col">
                        <a href="" data-type="{{ $category->slug }}">
                            <img src="{{ Voyager::image( $category->icon ) }}" alt="" class="img-fluid"/>
                            <img src="{{ Voyager::image( $category->icon_hoverd ) }}" alt="" class="img-fluid hover"/>
                            <h5>{{ $category->name }}</h5>
                        </a>
                    </div>

                @endforeach

            </div>

            <div class="clear"></div>

            <div class=" row products products-slider" data-slider-name="products-slider">
                @foreach($products as $product)
                    <div class="col-lg-3 product zoom-effect {{ $product->category()->first()->slug  }}">
                        <div class="thumbnail">
                            <img src="{{ Helpers::thumbnail(Voyager::image( $product->image), 'cropped') }}" alt="" class="img-fluid fadeIn"/>
                            <div class="heart-container">
                                <a data-product-name="{{ $product->name }}" data-product-image="{{ Helpers::thumbnail(Voyager::image( $product->image), 'cropped') }}" data-product-slug="{{ $product->slug  }}" class="add-wishlist heart" href="#" title="Add to my wishlist"></a>
                            </div>
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

                            <a href="{{url('/our-mixes#'.$mix->slug)}}" class="brown-btn text-1 font-weight-500 background-brown white">Read More</a>

                        </div>
                    @endforeach

                    <a class="next">></a>

                </div>

            </div>
        </div>
    </section>


@endsection

