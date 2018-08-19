<!doctype html>
<html lang="en">
    <head>
        {{-- head section --}}
        @include('partials._head')

    </head>

<body>
     <!--header section -->
     @include('partials._header')
       
    {{-- navigation section --}}
    @include('partials._navigation')

    @yield('content')

     {{-- main footer section --}}
     @include('partials._footer')

</body>
</html>
