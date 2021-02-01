<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('layouts.styles')
        @stack('styles')
        <title>Title</title>
    </head>
    <body>
        @include('layouts.header')
        <main class="primary-background">
            <div class="container">
                @include('layouts.response')
                @yield('content')
            </div>
            @include('layouts.preloader')
        </main>
        @include('layouts.scripts')
        @stack('scripts')
    </body>
</html>
