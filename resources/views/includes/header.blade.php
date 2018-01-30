{{--@if (env('APP_ENV')!= 'Production')--}}

{{--@if($body_class != 'blog')--}}
{{--    {{ HTML::style('css/bootstrap/bootstrap.min.6.css') }}--}}
{{ HTML::style('css/bootstrap/beta/bootstrap.min.css') }}
{{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}
{{--{{ HTML::style('https://fonts.googleapis.com/css?family=Ubuntu|Ropa+Sans|PT+Sans|Josefin+Sans|Josefin+Slab|Vollkorn|Arvo|Handlee|Nothing+You+Could+Do|Pompiere|Crimson+Text|Coda|Muli') }}--}}
{{ HTML::style('css/slick-1.8.0/slick.css') }}
{{ HTML::style('css/slick-1.8.0/slick-theme.css') }}
@if($body_class == 'gift-box')
    {{ HTML::style('css/fancybox/jquery.fancybox.css') }}
@endif
@if($body_class == 'post')
    {{ HTML::style('css/blog/social-icons/scions.css') }}
@endif
{{ HTML::style('css/app/app.css?v=2') }}
{{--@else--}}
{{--{{ HTML::style('css/blog/bootstrap/bootstrap.min.css') }}--}}
{{--@endif--}}
{{--@else--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"--}}
{{--integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"--}}
{{--integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">--}}

{{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>--}}
{{--@endif--}}
{{--<link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">--}}


{{--@if (env('APP_ENV')!= 'Production')--}}
{{ HTML::script('js/jquery/jquery-3.2.1.min.js') }}
{{ HTML::script('js/jquery/js.cookie.js') }}
{{--@if ($body_class != 'blog')--}}
{{--{{ HTML::script('js/imagesloaded/imagesloaded.pkgd.min.js') }}--}}
{{ HTML::script('js/bootstrap/popper.min.js') }}
{{--{{ HTML::script('js/bootstrap/tether.min.js') }}--}}
{{--{{ HTML::script('js/bootstrap/bootstrap.min.6.js') }}--}}
{{ HTML::script('js/bootstrap/beta/bootstrap.min.js') }}
{{ HTML::script('js/slick-1.8.0/slick.min.js') }}
{{--{{ HTML::script('js/isotope/isotope.pkgd.min.js') }}--}}
@if($body_class == 'gift-box')
    {{ HTML::script('js/fancybox/jquery.fancybox.js') }}
@endif
{{ HTML::script('js/app/css.js') }}
{{--@else--}}
{{--    {{ HTML::script('js/blog/bootstrap/bootstrap.bundle.min.js') }}--}}
{{--@endif--}}

{{--@else--}}
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"--}}
{{--integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"--}}
{{--crossorigin="anonymous"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>--}}
{{--<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>--}}
{{--@endif--}}