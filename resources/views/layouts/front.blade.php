<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
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
    <link id="pagestyle" href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link id="pagestyle" href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <style>
        a{
        text-decoration: none;
        }
    </style>
</head>
<body class="g-sidenav-show  bg-gray-200">
    {{-- Sidebar Section --}}
    @include('components.frontnavbar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        {{-- Navbar Section --}}
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    {{-- Script File --}}
    
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>
    
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        
          var availableTags = [];
            $.ajax({
                method:"GET",
                url: "/product_list",
                success: function(response) {
                    // console.log(response);
                    startAutoComplete(response);
                }
            });

        function startAutoComplete(availableTags)
        {
          $( "#search_product" ).autocomplete({
            source: availableTags
          });
        }

        </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal("{{ session('status') }}")
        </script>
    @endif
    @yield('scripts')
</body>
</html>