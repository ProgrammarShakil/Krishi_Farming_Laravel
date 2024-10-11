<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- EXTERNAL CSS  -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <!-- NAV TO HERO AREA WITH PARTICLE JS -->
    {{-- <div id="particles-js">
    </div> --}}

    <!-- NAVBAR -->
    @include('frontend.partials.navbar')

    {{-- MAIN CONTENT  --}}
    @yield('content')

    @include('frontend.partials.footer')
    <!-- JAVASCRIPT CDN -->
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- EXTERNAL JS  -->
    <!-- Particle JS  -->
    <script src="{{ asset('js/particles/particles.js') }}"></script>
    <script src="{{ asset('js/particles/app.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <!-- Script for Menu Toggles -->

</body>

</html>
