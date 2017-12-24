@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')
    <!-- Page Content -->
    <section class="blog">
        <div class="container"  >

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8 ">
                    <div class="posts">
                    @foreach($posts as $post)
                        <!-- Blog Post -->
                            <div class="card mb-4">
                                <a href="{{url('post/'.$post->slug)}}" class="zoom-effect">
                                    <div class="thumbnail">
                                        <img class="card-img-top" src="{{ Helpers::thumbnail( Voyager::image( $post->image), '750x300') }}" alt="">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a href="{{url('post/'.$post->slug)}}">
                                        <h2 class="card-title brown">{{$post->title}}</h2>
                                    </a>
                                    <p class="card-text">{!! $post->excerpt !!}</p>
                                    <a href="{{url('post/'.$post->slug)}}" class="text-center read-more">Read More</a>
                                </div>
                                <div class="card-footer text-muted">
                                    Posted
                                    on {{ Helpers::changeDateTimeFormat($post->created_at, 'Y-m-d H:i:s', 'F d, Y') }}
                                    by <a href="{{$post->link}}">{{$post->link}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <ul class="pagination justify-content-center" data-post-pre-page="{{$postPearPage}}">

                        {{--<li class="page-item">--}}
                        {{--<a class="page-link" href="#" aria-label="Previous">--}}
                        {{--<span aria-hidden="true">«</span>--}}
                        {{--<span class="sr-only">Previous</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}

                        @for($index = 1; $index <= $postsPagination; $index++)
                            <li class="page-item">
                                <a class="page-link" href="{{$index}}">{{$index}}</a>
                            </li>
                        @endfor
                        {{--<li class="page-item">--}}
                        {{--<a class="page-link" href="#" aria-label="Next">--}}
                        {{--<span aria-hidden="true">»</span>--}}
                        {{--<span class="sr-only">Next</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}

                    </ul>

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Search Widget -->
                    {{--<div class="card my-4">--}}
                        {{--<h5 class="card-header">Search</h5>--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                                {{--<span class="input-group-btn">--}}
                  {{--<button class="btn btn-secondary" type="button">Go!</button>--}}
                {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <!-- Categories Widget -->
                    <div class="card my-4 categories-widget">
                        <h5 class="card-header">Categories</h5>
                        <div class="card-body">
                            <div class="row">
                                @php;
                                    $firstCategoriesSet = array_splice($postsCategories, 0, ceil(count($postsCategories)/2));
                                    $secondCategoriesSet = $postsCategories;
                                @endphp
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($firstCategoriesSet as $category)
                                            <li>
                                                <a class="category" href="{{$category['slug']}}">{{$category['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($secondCategoriesSet as $category)
                                            <li>
                                                <a class="category" href="{{$category['slug']}}">{{$category['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Categories Widget -->

                    <!-- Tags Widget -->
                    <div class="card my-4 tags-widget">
                        <h5 class="card-header">Tags</h5>
                        <div class="card-body">
                            <div class="row">
                                @php
                                    $firstTagsSet = array_splice($postsTags, 0, ceil(count($postsTags)/2));
                                    $secondTagsSet = $postsTags;
                                @endphp
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($firstTagsSet as $tag)
                                            <li>
                                                <a class="tag" href="{{$tag['name']}}">#{{$tag['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($secondTagsSet as $tag)
                                            <li>
                                                <a class="tag" href="{{$tag['name']}}">#{{$tag['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Tags Widget -->

                    {{--<div class="card my-4">--}}
                        {{--<h5 class="card-header">Side Widget</h5>--}}
                        {{--<div class="card-body">--}}
                            {{--You can put anything you want inside of these side widgets. They are easy to use, and--}}
                            {{--feature--}}
                            {{--the new Bootstrap 4 card containers!--}}
                        {{--</div>--}}
                    {{--</div>--}}

                </div>

            </div>
            <!-- /.row -->

        </div>
    </section>
    <!-- /.container -->
@endsection