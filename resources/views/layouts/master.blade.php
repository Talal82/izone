<!DOCTYPE html>
<html>
    <head>
        {{-- Head section --}}
        @include('master_partials._head')
    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            {{-- topbar section --}}
            @include('master_partials._header')

            {{-- left sidebar section --}}
            @include('master_partials._sidebar')

            {!! Toastr::render() !!}

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                            @include('partials._messages')
                            @yield('content')

                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->

                {{-- footer section here --}}
                @include('master_partials._footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            

        </div>
        <!-- END wrapper -->

        {{-- scripts section here --}}
        @include('master_partials._scripts')

    </body>
</html>