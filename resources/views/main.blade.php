<!doctype html>
<html lang="en">
<head>
    {{-- head section --}}
    @include('partials._head')
    <style>
    #map{
        height: 200px;
        width: 350px;
    }
</style>

</head>

<body>
   <!--header section -->
   @include('partials._header')

   {{-- navigation section --}}
   @include('partials._navigation')

   <div class="container">
        {{-- success or error messages section --}}
        @include('partials._messages')
    </div>

    {{-- page content section --}}
    @yield('content')



{{-- main footer section --}}
@include('partials._footer')

</body>
</html>
