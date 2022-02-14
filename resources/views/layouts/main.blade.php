<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halo Indonesia</title>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="{{ asset('css/material-dashboard.css') }}" type="text/css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('css/custom.css') }}" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body class="g-sidenav-show  bg-gray-200">
    {{-- Sidebar Section --}}
    @include('components.Sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        {{-- Navbar Section --}}
        @include('components.Navbar')
        <div class="container-fluid py-4">
            @yield('content')
            @include('components.Footer')
        </div>
    </main>
    {{-- Script File --}}
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/snooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.min.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal("{{ session('status') }}")
        </script>
    @endif

</body>
</html>