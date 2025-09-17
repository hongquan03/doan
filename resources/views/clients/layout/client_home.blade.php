<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('assets/clinets/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('assets/clinets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('assets/clinets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/clinets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/clinets/css/responsive.css')}}">
        {{-- Import CSS for Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        @include('clients.partials.header_home')
        <main>
            @yield('content')
        </main>
        @include('clients.partials.footer_home')

    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

<!-- All JS Plugins -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- All JS Plugins -->
    <script src="{{asset('assets/clinets/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/clinets/js/main.js')}}"></script>
    {{-- Jquery-toats --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- Javascript --}}
    <script> src="{{asset('assets/clinets/js/customs.js')}}" </script>

</body>

</html>