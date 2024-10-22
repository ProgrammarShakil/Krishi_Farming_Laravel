<!-- FOOTER  -->
<footer class="main-bg-color text-white py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 text-center md:text-left">
        <!-- Logo and tagline -->
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Farming Future Bangladesh"
                class="mb-3 mx-auto w-24 w-32 lg:w-96">
            <p class="tracking-wide">Lighthouse of Agriculture</p>
        </div>

        <!-- About Us section -->
        <div>
            <h3 class="font-bold mb-3">{{ $footer->footer_title_1 }}</h3>
            <ul class="space-y-2">
                @if ($footer->footer_title_1_text_1)
                    <li><a href="{{ $footer->footer_title_1_link_1 }}" class="hover:underline">{{ $footer->footer_title_1_text_1 }}</a></li>
                @endif
                @if ($footer->footer_title_1_text_2)
                    <li><a href="{{ $footer->footer_title_1_link_2 }}" class="hover:underline">{{ $footer->footer_title_1_text_2 }}</a></li>
                @endif
                @if ($footer->footer_title_1_text_3)
                    <li><a href="{{ $footer->footer_title_1_link_3 }}" class="hover:underline">{{ $footer->footer_title_1_text_3 }}</a></li>
                @endif
                @if ($footer->footer_title_1_text_4)
                    <li><a href="{{ $footer->footer_title_1_link_4 }}" class="hover:underline">{{ $footer->footer_title_1_text_4 }}</a></li>
                @endif
                @if ($footer->footer_title_1_text_5)
                    <li><a href="{{ $footer->footer_title_1_link_5 }}" class="hover:underline">{{ $footer->footer_title_1_text_5 }}</a></li>
                @endif
            </ul>
        </div>

        <!-- Resources section -->
        <div>
            <h3 class="font-bold mb-3">{{ $footer->footer_title_2 }}</h3>
            <ul class="space-y-2">
                @if ($footer->footer_title_2_text_1)
                    <li><a href="{{ $footer->footer_title_2_link_1 }}" class="hover:underline">{{ $footer->footer_title_2_text_1 }}</a></li>
                @endif
                @if ($footer->footer_title_2_text_2)
                    <li><a href="{{ $footer->footer_title_2_link_2 }}" class="hover:underline">{{ $footer->footer_title_2_text_2 }}</a></li>
                @endif
                @if ($footer->footer_title_2_text_3)
                    <li><a href="{{ $footer->footer_title_2_link_3 }}" class="hover:underline">{{ $footer->footer_title_2_text_3 }}</a></li>
                @endif
                @if ($footer->footer_title_2_text_4)
                    <li><a href="{{ $footer->footer_title_2_link_4 }}" class="hover:underline">{{ $footer->footer_title_2_text_4 }}</a></li>
                @endif
                @if ($footer->footer_title_2_text_5)
                    <li><a href="{{ $footer->footer_title_2_link_5 }}" class="hover:underline">{{ $footer->footer_title_2_text_5 }}</a></li>
                @endif
            </ul>
        </div>

        <!-- Allies section -->
        <div>
            <h3 class="font-bold mb-3">{{ $footer->footer_title_3 }}</h3>
            <ul class="space-y-2">
                @if ($footer->footer_title_3_text_1)
                    <li><a href="{{ $footer->footer_title_3_link_1 }}" class="hover:underline">{{ $footer->footer_title_3_text_1 }}</a></li>
                @endif
                @if ($footer->footer_title_3_text_2)
                    <li><a href="{{ $footer->footer_title_3_link_2 }}" class="hover:underline">{{ $footer->footer_title_3_text_2 }}</a></li>
                @endif
                @if ($footer->footer_title_3_text_3)
                    <li><a href="{{ $footer->footer_title_3_link_3 }}" class="hover:underline">{{ $footer->footer_title_3_text_3 }}</a></li>
                @endif
                @if ($footer->footer_title_3_text_4)
                    <li><a href="{{ $footer->footer_title_3_link_4 }}" class="hover:underline">{{ $footer->footer_title_3_text_4 }}</a></li>
                @endif
                @if ($footer->footer_title_3_text_5)
                    <li><a href="{{ $footer->footer_title_3_link_5 }}" class="hover:underline">{{ $footer->footer_title_3_text_5 }}</a></li>
                @endif
            </ul>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="container mx-auto mt-10 border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-center md:justify-between items-center text-center">
        <div>
            <p>©2024 Copyright All rights reserved <a href="https://bdkrishi.com" class="text-green-400">BD KRISHI</a></p>
        </div>
        <div class="flex space-x-4 mt-4 md:mr-12 md:mt-0 justify-center">
            <a href="https://www.linkedin.com/company/bdkrishi" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://x.com/bdkrishi" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="https://www.facebook.com/bdkrishi" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://youtube.com/@bdkrishi1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.instagram.com/bdkrishi" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
    </div>
</footer>
