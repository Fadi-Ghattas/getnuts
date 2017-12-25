<section class="top-nav-wrapper">

    <div class="container">


        <nav class="navbar top-nav navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('/images/logo.svg')}}" width="135" height="42" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    @foreach($items as $menu_item)
                        <li class="nav-item">
                            <a class="nav-link" data-f="" href="{{url($menu_item->url)}}"> {{ $menu_item->title }} </a>
                        </li>
                    @endforeach

                    @if (Route::has('login'))
                        @if (Auth::check())
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Welcome {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="profile">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                    </a>
                                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>

                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ url('/register') }}">Register</a>--}}
                            {{--</li>--}}
                        @endif
                    @endif

                    <li class="nav-item wishlist-container dropdown">

                        <a class="nav-link dropdown-toggle" href="https://example.com" id="wishlist"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="heart-container">
                                <div class="heart"></div>
                                <span class="number-of-products">0</span>
                            </div>
                        </a>

                        <div class="dropdown-menu wishlist-menu" aria-labelledby="wishlist">
                            <ul class="wishlist">
                                <li>
                                <div class="row wishlist-item">
                                <img src="http://getnuts.develop//storage/products/December2017/JACWYC3d1uzSvdLMbQov-cropped.jpg" alt=""/>
                                <p class="title text-1">Peanuts</p>
                                </div>
                                </li>
                            </ul>
                        </div>

                    </li>

                    <li class="nav-item social">
                        <a class="facebook nav-link" href="https://www.facebook.com/pg/shopgetnuts/" target="_blank">
                        </a>
                    </li>
                    <li class="nav-item social">
                        <a class="instagram nav-link" href="https://www.instagram.com/shopgetnuts/" target="_blank">
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        {{--<nav class="navbar top-nav navbar-light bg-light">--}}
        {{--<a class="navbar-brand" href="#">--}}
        {{--<img src="{{url('/images/logo.svg')}}" width="135" height="42" alt="">--}}
        {{--</a>--}}

        {{--<button class="navbar-toggler" type="button" data-toggle="collapse"--}}
        {{--data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"--}}
        {{--aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse justify-content-end" id="navbarNav">--}}
        {{--<ul class="navbar-nav">--}}
        {{--@foreach($items as $menu_item)--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="{{ $menu_item->url }}"> {{ $menu_item->title }} </a>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--<li class="nav-item social">--}}
        {{--<a class="facebook nav-link" href="https://www.facebook.com/pg/shopgetnuts/" target="_blank">--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item social">--}}
        {{--<a class="instagram nav-link" href="https://www.instagram.com/shopgetnuts/" target="_blank">--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--</div>--}}

        {{--</nav>--}}

        {{--<nav class="navbar top-nav navbar-toggleable-md navbar-light">--}}

        {{--<a class="navbar-brand" href="{{url('/')}}">--}}
        {{--<img src="{{Voyager::image(setting('site.logo'))}}" width="135" height="42" alt="">--}}
        {{--<img src="{{url('/images/logo.svg')}}" width="135" height="42" alt=""/>--}}
        {{--</a>--}}

        {{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"--}}
        {{--data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"--}}
        {{--aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse justify-content-end" id="navbarNav">--}}
        {{--<ul class="navbar-nav">--}}
        {{--@foreach($items as $menu_item)--}}
        {{--<li class="nav-item">--}}
        {{--<a class="nav-link" href="{{ $menu_item->url }}"> {{ $menu_item->title }} </a>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--<li class="nav-item social">--}}
        {{--<a class="facebook nav-link" href="https://www.facebook.com/pg/shopgetnuts/" target="_blank">--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item social">--}}
        {{--<a class="instagram nav-link" href="https://www.instagram.com/shopgetnuts/" target="_blank">--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--</div>--}}
        {{--</nav>--}}

    </div>
</section>