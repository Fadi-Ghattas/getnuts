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

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{url('/images/favicon/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('/images/favicon/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('/images/favicon/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('/images/favicon/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{url('/images/favicon/apple-touch-icon-60x60.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{url('/images/favicon/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{url('/images/favicon/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{url('/images/favicon/apple-touch-icon-152x152.png')}}" />
    <link rel="icon" type="image/png" href="{{url('/images/favicon/favicon-196x196.png" sizes="196x196')}}" />
    <link rel="icon" type="image/png" href="{{url('/images/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{url('/images/favicon/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{url('/images/favicon/favicon-16x16.png')}}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{url('/images/favicon/favicon-128.png')}}" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{url('/images/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{url('/images/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{url('/images/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{url('/images/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{url('/images/favicon/mstile-310x310.png')}}" />


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