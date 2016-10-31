<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>{{ trans('helpers.title_page') }}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="Administrator">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    @include('admin/base/css/style')

</head>
<body>
    @yield('content')
    @include('admin/base/script/script')
</body>
</html>