<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <a href="/" id="logo">
            <img src='/images/rps-logo.png' alt='Rock Paper Scissors Logo'>
            <h1>{{ $app->config('app.name') }}</h1>
        </a>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>