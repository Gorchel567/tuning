<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/x-icon" href="/images/logo/favicon.ico">
    <meta property="og:image" content="/images/logo/og_logo.png" />
    <meta property="og:title" content="CHIPOGRAF - Чип Тюнинг Lada, Renault, Kia, Hyundai в СПБ" />
    <meta property="og:description" content="Чип Тюнинг Lada, Renault, Kia, Hyundai в СПБ" />
    <title>Chipograf</title>
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
