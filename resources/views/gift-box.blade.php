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

                    <div class="col-lg-6 gift-box-gallery">

                        <a class="fancybox" rel="gallery_100" href="{{url('/images/about/story.jpg')}}">
                            <img src="{{url('/images/about/story.jpg')}}" class="thub" data-lazy-loaded="true">
                        </a>

                        <a class="fancybox hidden" rel="gallery_100" href="{{url('/images/about/story.jpg')}}">
                            <img src="{{url('/images/about/story.jpg')}}" class="thub" data-lazy-loaded="true">
                        </a>

                    </div>

                    <div class="col-lg-6 text-center vertically-center background-white the-story">
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

                </div>
            </div>
        </section>

    </section>

@endsection