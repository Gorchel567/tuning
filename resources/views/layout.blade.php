<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/x-icon" href="/images/logo/favicon.ico">
    <meta property="og:image" content="{{isset($ogImage) ? $ogImage : '/images/logo/og_logo.png'}}" />
    <meta property="og:title" content="{{isset($ogTitle) ? $ogTitle : 'CHIPOGRAF - Чип Тюнинг Lada, Renault, Kia, Hyundai в СПБ'}}" />
    <meta property="og:description" content="{{isset($ogDescription) ? $ogDescription : 'Чип Тюнинг Lada, Renault, Kia, Hyundai в СПБ'}}" />
    <title>{{isset($ogDescription) ? $ogDescription : 'Чип Тюнинг Lada, Renault, Kia, Hyundai в СПБ'}}</title>
    <link rel="canonical" href="{{env('APP_URL')}}">
</head>
<body>
    @include('layout.header')
    @include("home.nav")

    @yield('content')

    @include('layout.footer')
    @include("templates.modals")

    <script async src="/js/app.js"></script>
</body>
</html>
