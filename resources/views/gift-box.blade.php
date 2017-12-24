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
                        <h1 class="green">Getnuts' Story</h1>
                        <p class="text-1">"Get nuts over our healthy range of nuts"<br/>
                            Getnuts is a lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac <br/> quam
                            quis urna
                            gravida efficitur. In aliquet ipsum sit amet bibendum <br/> elementum.
                        </p>
                        <p class="text-1">Mauris ac efficitur metus, et euismod justo. Sed commodo sollicitudin <br/>
                            metus at facilisis. Etiam
                            congue ante vitae fringilla scelerisque. Maecenas <br/> maximus, libero eu fringilla
                            egestas, dolor
                            eros volutpat odio, et consectetur <br/> eros orci sed risus. Suspendisse nec suscipit leo.
                            Donec
                            risus metus, rutrum <br/> non elit a, dictum congue elit. Nunc porta id est at placerat. Nam
                            tristique, <br/> mi quis aliquam dapibus, nulla mi accumsan ipsum, eu venenatis diam <br/>
                            massa id leo.
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