<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>維基百科 Wikipedia - @yield('title')</title>
        @include('layouts.meta')
        @include('layouts.css')
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>



      @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')

        @include('layouts.js')

    </body>
</html>
