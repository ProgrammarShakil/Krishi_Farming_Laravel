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

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>

    <!-- EXTERNAL CSS  -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    {{-- /*********** GOOGLE TRANSLATE JS  **************/ --}}
    <script type="text/javascript">
        // Google Translate Customize
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }

        // Function to trigger language change based on selection
        function changeLanguage(lang) {
            var selectField = document.querySelector("select.goog-te-combo");
            if (selectField) {
                selectField.value = lang;
                selectField.dispatchEvent(new Event("change"));
            }
        }

        $(document).ready(function() {
            // Handle language toggle button click
            $('#toggleLang').on('click', function() {
                var currentLang = $(this).attr('data-lang');
                if (currentLang === 'en') {
                    changeLanguage('bn'); // Switch to Bengali
                    $(this).attr('data-lang', 'bn').text('Switch to English');
                } else {
                    changeLanguage('en'); // Switch to English
                    $(this).attr('data-lang', 'en').text('Switch to Bengali');
                }
            });
        });
    </script>
    {{-- /*********** GOOGLE TRANSLATE STYLE  **************/ --}}

    {{-- *********** Google Translate CDN *********** --}}
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


    {{-- /*********** GOOGLE TRANSLATE STYLE  **************/ --}}
    <style>
        /* Style for Google Translate dropdown */
        #google_translate_element {
            position: absolute;
            top: 10px;
            right: 20px;
            z-index: 999;
        }

        /* Hide Google Translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        /* Fixing Top 0 Issue */
        body {
            top: 0px !important;
            position: static !important;
        }

        /* Hide the Google Translate logo */
        .goog-logo-link {
            display: none !important;
        }

        /* Hide Google Translate SkipTranslate  */
        .skiptranslate {
            display: none !important;
        }

        /* Hide Google Translate Icon  */
        .VIpgJd-ZVi9od-aZ2wEe {
            display: none !important;
        }

        /* Hide Google Translate Icon  */
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
            display: none;
        }

        /* Hide Google Translate Icon  */
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            display: none;
        }
    </style>
    {{-- /*********** GOOGLE TRANSLATE STYLE  **************/ --}}
</head>

<body>

    {{-- NAVBAR  --}}
    @include('frontend.partials.navbar')

    {{-- /*********** GOOGLE TRANSLATE  **************/ --}}
    <!-- Google Translate Dropdown -->
    <div id="google_translate_element"></div>

    <!-- Language Toggle Button -->
    <button id="toggleLang" data-lang="en"
        class="z-20 fixed bottom-4 left-4 bg-teal-900 text-white px-4 py-3 rounded-full shadow-lg hover:bg-teal-600">
        Switch to Bengali
    </button>
    {{-- /*********** GOOGLE TRANSLATE  **************/ --}}

    {{-- MAIN CONTENT  --}}
    @yield('content')

    {{-- WhatsApp Chatting  --}}
    <a href="https://wa.me/+8801870178888" target="_blank"
        class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-3 rounded-full shadow-lg hover:bg-green-600">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    {{-- FOOTER  --}}
    @include('frontend.partials.footer')


    <!-- Owl Caoursel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Particle JS -->
    <script src="{{ asset('js/particles/particles.js') }}"></script>
    <script src="{{ asset('js/particles/app.js') }}"></script>

    {{-- Custom JS  --}}
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
