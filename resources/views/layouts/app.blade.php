<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title}}</title>

    @if($body_class == 'home' || $body_class == 'products')
        <script>
            var products = {!! json_encode($productsJson) !!};
        </script>
    @endif
    <script>
        var home_url = {!! json_encode(url('/')) !!};
    </script>


    @include('includes.header', ['body_class' => $body_class])
</head>

<body @unless(empty($body_class)) class="{{$body_class}}" @endunless>

   {{menu('Top Nav', 'includes.top-nav')}}
    @yield('content')

    @include('includes.footer')

</body>
</html>