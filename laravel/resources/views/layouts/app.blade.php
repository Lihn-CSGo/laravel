<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AdminLTE 3 | @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Sidebar --}}
  @include('partials.sidebar')

  {{-- Content --}}
  <div class="content-wrapper">
      @yield('content')
  </div>

  {{-- Footer --}}
  @include('partials.footer')

</div>

@include('partials.scripts')
</body>
</html>