<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'turbo')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .nav {
            display: flex;
            list-style: none;
            flex-wrap: nowrap;
            padding: 15px 35px;
            box-shadow: 0px 5px 15px gray;
        }

        .nav li {
            margin-right: 20px;
        }

        .nav li a:link {
            text-decoration: none;
            color: #840000;
        }

        .nav li a:visited {
            text-decoration: none;
            color: #840000;
        }

        .nav li a:hover {
            text-decoration: underline;
            color: #008416;
        }

        .nav li a:active {
            text-decoration: underline;
            color: #008416;
        }

        .loading {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            inset: 0;
            background-color: #d4d4d49e;
        }
    </style>
</head>

<body class="container">
    <ul class="nav">
        <li><a href="{{ route('home') }}">home</a></li>
        <li><a href="{{ route('foo') }}">foo</a></li>
        <li><a href="{{ route('bar') }}">bar</a></li>
        <li><a href="{{ route('delay') }}">delay</a></li>
    </ul>

    <center>
        @yield('content')
    </center>

    <script defer src="{{ mix('js/app.js') }}"></script>
    @yield('script')
</body>

</html>
