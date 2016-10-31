<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{!! $configureDescription !!}">
    <meta name="author" content="">
    <meta name="keywords" content="{!! $keyWords !!}">
 
    <title>Escorts Agencies in Ibiza</title>

    @include('frontend.css.css')
</head>
<body>
    <div class="wrapper">
        @include('frontend.base.header')
        @include('frontend.base.nav')
            @yield('content')
        @include('frontend.base.footer')
        @include('frontend.base.copyright')
    </div>
    @include('frontend.script.script')

</body>
</html>