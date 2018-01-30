@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')

    <section class="gift-box">

        <section class="page-banner"></section>


        <section class="gifts-boxes">

            <div class="container">
                <div class="row">


                    <div class="col-lg-12 text-center vertically-center the-story">
                        <h1 class="green">Our Gift Box</h1>
                        <p class="text-1">
                            <span class="br-mob">You can Now customize your own gift Box for your loved ones!</span> <br/>
                            The steps you need to follow are simple and easy:
                        </p>
                        <p class="text-1">
                            1. you choose the products you want
                        </p>
                        <p class="text-1">
                            2. you choose the theme of the box (holiday, birthday,...)
                        </p>
                        <p class="text-1">
                            3. give us a call on <a class="tel" href="tel:+96170145557">+ 961 70 145 557</a> or <a class="tel" href="tel:+9614400671">+ 961 4 400 671</a> to order your special gift.
                        </p>
                        <p class="text-1">
                            You can even choose an already customized done gift box.
                        </p>
                    </div>

                    <div class="col-lg-12 text-center gift-box-gallery">


                        <div class="mixes-slider-wrapper">
                            <div class="row mixes gift-boxes" data-slider-name="mixes-slider">

                                <a class="prev"><</a>
                                @foreach($giftBoxes as $box)
                                    <div class="col-lg-12 mix gift-box text-center">
                                        <a class="fancybox" rel="gallery_100" href="{{Voyager::image($box->image)}}">
                                            <img src="{{ Helpers::thumbnail(Voyager::image( $box->image), '800x330')}}" class="img-fluid thub" data-lazy-loaded="true">
                                        </a>
                                    </div>
                                @endforeach
                                <a class="next">></a>

                            </div>

                        </div>



                        {{--<a class="fancybox" rel="gallery_100" href="{{url('/images/about/story.jpg')}}">--}}
                            {{--<img src="{{url('/images/about/story.jpg')}}" class="thub" data-lazy-loaded="true">--}}
                        {{--</a>--}}

                        {{--<a class="fancybox hidden" rel="gallery_100" href="{{url('/images/about/story.jpg')}}">--}}
                            {{--<img src="{{url('/images/about/story.jpg')}}" class="thub" data-lazy-loaded="true">--}}
                        {{--</a>--}}


                    <!-- THUMBNAILS -->
                        {{--<div class="slider-nav-thumbnails">--}}
                            {{--<div>--}}
                                {{--<img src="{{url('/images/about/story.jpg')}}"  slide="slide_1">--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<img src="{{url('/images/about/story.jpg')}}"  slide="slide_2">--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<img src="{{url('/images/about/story.jpg')}}"  slide="slide_3">--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<img src="{{url('/images/about/story.jpg')}}"  slide="slide_4">--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<img src="{{url('/images/about/story.jpg')}}"  slide="slide_5">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>



                </div>
            </div>
        </section>

    </section>

@endsection