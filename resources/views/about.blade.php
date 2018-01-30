@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')
    <section class="page-banner"></section>

    <section class="story">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 story-thumbnail">
                    <img src="{{url('/images/about/story.jpg')}}" alt="" class="img-fluid"/>
                </div>

                <div class="col-lg-6 text-center vertically-center background-white the-story">
                    <h1 class="green">Getnuts' Story</h1>
                    <p class="text-1">"Get nuts over our healthy range of nuts"<br/>
                        GetNuts is your address for healthiest, most delicious <br/> and high quality conventional nuts, seeds, trail mixes and dried fruits.
                        <br/> We care about you!
                    </p>
                    <p class="text-1">This is the reason why we never settle for less to offer you only the best.
                        <br/> In GetNuts we always grow the highest quality products.
                        <br/> Our endless passion to explore the best leads us to always surprise our customers
                        <br/> with unique and most functional assortments with high flexibility without sacrificing from our high-quality standards.
                        <br/> Our vision of providing smart eating decisions for everyone in your family is ultimately underlined by our passion for natural & healthier foods.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="all-qualities background-dark-white">
        <div class="container">
            <div class="row qualities">
                <div class="col-md-4 col-log-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">

                                <div class="col-md-3 icon text-center show-mob">
                                    <img src="{{url('/images/icons/forma.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>

                                <div class="col-md-9 content">
                                    <h4 class="text-right-not-mob">100% Natural</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                         gravida
                                         efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>

                                <div class="col-md-3 icon text-center show-desk">
                                    <img src="{{url('/images/icons/forma.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">
                                <div class="col-md-3 icon text-center show-mob">
                                    <img src="{{url('/images/icons/forma-1-3.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-3-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>

                                <div class="col-md-9 content">
                                    <h4 class="text-right-not-mob">Fresh Indeed</h4>
                                    <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                            gravida
                                            efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>
                                <div class="col-md-3 icon text-center show-desk">
                                    <img src="{{url('/images/icons/forma-1-3.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-3-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">

                                <div class="col-md-3 icon text-center show-mob">
                                    <img src="{{url('/images/icons/forma-1-2.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-2-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>

                                <div class="col-md-9 content">
                                    <h4 class="text-right-not-mob">Premium Quality</h4>
                                    <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                            gravida
                                            efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>
                                <div class="col-md-3 icon text-center show-desk">
                                    <img src="{{url('/images/icons/forma-1-2.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-2-hover.png')}}" alt="" class="img-fluid hover"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-log-4 quality-background">
                    <img src="{{url('/images/about/shutterstock.png')}}" alt="" class="img-fluid" />
                </div>

                <div class="col-md-4 col-log-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">
                                <div class="col-md-3 icon text-center">
                                    <img src="{{url('/images/icons/apple.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-7-layer 1.png')}}" alt="" class="img-fluid hover"/>
                                </div>
                                <div class="col-md-9 content">
                                    <h4>100% Healthy</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                            gravida
                                            efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">
                                <div class="col-md-3 icon text-center">
                                    <img src="{{url('/images/icons/forma-1-6-u3854-fr.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-6-layer 2.png')}}" alt="" class="img-fluid hover"/>
                                </div>
                                <div class="col-md-9 content">
                                    <h4>No added Salt</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                            gravida
                                            efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 quality">
                            <div class="row">
                                <div class="col-md-3 icon text-center">
                                    <img src="{{url('/images/icons/forma-1-5.png')}}" alt="" class="img-fluid" />
                                    <img src="{{url('/images/icons/forma-1-5-layer 1.png')}}" alt="" class="img-fluid hover"/>
                                </div>
                                <div class="col-md-9 content">
                                    <h4>No added Sugar</h4>
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac quam quis urna
                                         gravida
                                         efficitur. In aliquet ipsum sit amet bibendum elementum.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection