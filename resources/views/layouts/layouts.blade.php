<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Secure Password Manager Application Buit in Laravel.">
  <meta name="author" content='Pushpak Chhjed.'>
  <title>
    @yield('title','Secupass|Password Manager Application')
  </title>
  <!-- Favicon -->
  {{-- <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png"> --}}
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('assets') }}/css/argon.css?v=1.0.0" rel="stylesheet">
  {{-- for the infile css --}}
  @stack('css')
</head>
    
  
<body>
  @include('layouts.sidebar')
  @include('layouts.headers')
  @yield('content')
  @include('layouts.footers')
    
<!-- Core -->
<script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Argon JS -->
<script src="{{ asset('assets') }}/js/argon.min.js"></script>
@stack('js')
</body>
</html>