@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $post->title
        ])

@section('content')
    <!-- Page Content -->
    <div class="container">

        <section class="post">

            <div class="row">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Title -->
                    <h1 class="post-title brown">{{$post->title}}</h1>

                    <!-- Author -->
                    {{--<p class="lead">--}}
                    {{--by--}}
                    {{--<a href="#">Start Bootstrap</a>--}}
                    {{--</p>--}}

                    <hr>

                    <!-- Date/Time -->
                    <h4>Posted
                        on {{ Helpers::changeDateTimeFormat($post->created_at, 'Y-m-d H:i:s', 'F d, Y h:i A') }}</h4>

                    <hr>

                    <!-- Preview Image -->
                    <div class="post-mage">
                        <div class="zoom-effect">
                            <div class="thumbnail">
                                <img class="img-fluid rounded"
                                     src="{{ Helpers::thumbnail( Voyager::image( $post->image), '900x300') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Post Content -->
                    <div class="content">
                        {!! $post->body !!}
                    </div>

                    <div>
                        <a href="{{$post->link}}">{{$post->link}}</a>
                    </div>
                    <hr>

                    <div class="social">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('post/'.$post->slug)}}"
                           class="icon-facebook" target="_blank"></a>
                        <a href="https://twitter.com/home?status={{url('post/'.$post->slug)}}" class="icon-twitter"
                           target="_blank"></a>
                        <a href="https://plus.google.com/share?url={{url('post/'.$post->slug)}}" class="icon-gplus"
                           target="_blank"></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url('post/'.$post->slug)}}&title={{$post->title}}&summary={!! $post->excerpt !!}&source={{url('/')}}"
                           target="_blank" class="icon-linkedin"></a>
                        <a href="mailto:?&subject={{$post->title}}" class="icon-rss"></a>

                        {{--<a href="javascript:void(0);" class="icon-instagram"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-foursquare"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-soundcloud"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-youtube"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-vimeo"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-dribbble"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-github"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-tumblr"></a>--}}
                        {{--<a href="javascript:void(0);" class="icon-stackexchange"></a>--}}
                    </div>

                    <hr>

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Side Widget -->
                    <div class="card my-4 related-posts-widget">
                        <h5 class="card-header">Related Posts</h5>
                        <div class="card-body">
                            @foreach($relatedPosts as $post)
                                <div class="related-post row">
                                    <div class="image zoom-effect col-md-6">
                                        <div class="thumbnail">
                                            <a href="{{$post->slug}}">
                                                <img src="{{ Helpers::thumbnail( Voyager::image( $post->image), '140x80') }}" class="img-fluid" alt=""/>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="content col-md-6">
                                        <a href="{{$post->slug}}">
                                            <h4 class="green">{{$post->title}}</h4>
                                        </a>
                                            <div class="description gray text-1">
                                                @php
                                                    $excerpt = Helpers::removeFirstParagraph($post->excerpt);
                                                     if(empty($excerpt)){
                                                      $excerpt = Helpers::removeFirstParagraph($post->body);
                                                     }
                                                   $excerpt = Helpers::limitTextAsExpert($excerpt, 10, $post->slug);
                                                @endphp
                                                {!! $excerpt !!}
                                            </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </section>

    </div>
    <!-- /.container -->
@endsection