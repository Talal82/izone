<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<title>Admin - @yield('title')</title>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

<!-- App css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

{{-- custom stylesheets if needed --}}
@yield('stylesheets')

<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>