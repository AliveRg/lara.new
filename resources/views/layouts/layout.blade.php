<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">


</head>

<body>
    <header>
        @include('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('footer')
    </footer>
    <script src="/js/app.js"></script>
</body>

</html>
