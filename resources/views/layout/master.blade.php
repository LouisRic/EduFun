<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.bootstrap')
    <title>@yield('title')</title>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        @include('layout.navbar')

        <div class="content">
            @yield('content')
        </div>

        @include('layout.footer')
    </div>
</body>
</html>
