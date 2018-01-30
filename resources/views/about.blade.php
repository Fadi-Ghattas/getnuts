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
                        Getnuts is a lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac <br/> quam quis urna
                        gravida efficitur. In aliquet ipsum sit amet bibendum  <br/> elementum.
                    </p>
                    <p class="text-1">Mauris ac efficitur metus, et euismod justo. Sed commodo sollicitudin <br/> metus at facilisis. Etiam
                        congue ante vitae fringilla scelerisque. Maecenas <br/> maximus, libero eu fringilla egestas, dolor
                        eros volutpat odio, et consectetur <br/> eros orci sed risus. Suspendisse nec suscipit leo. Donec
                        risus metus, rutrum <br/> non elit a, dictum congue elit. Nunc porta id est at placerat. Nam
                        tristique, <br/> mi quis aliquam dapibus, nulla mi accumsan ipsum, eu venenatis diam <br/> massa id leo.
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