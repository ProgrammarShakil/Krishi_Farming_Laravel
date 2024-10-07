<nav class="bg-white shadow-lg z-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div>
                <a href="{{ route('frontend.pages.index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"
                        class="h-20 inline"></a>
            </div>

            <!-- DESKTOP MENU -->
            <div class="relative hidden md:block">
                <button id="dropdownButton" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <span class="font-bold">Opportunities</span>
                    <svg class="w-5 h-5 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>

                <!-- Dropdown Content -->
                <div id="dropdownContent" class="hidden absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg z-10">
                    <ul class="py-2 text-gray-600">
                        <li><a href="{{ route('intern-applications.create') }}"
                                class="block px-4 py-2 hover:bg-gray-100">Intern Application</a>
                        </li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Job Application</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Investment Proposal</a>
                        </li>
                        <li><a href="{{ route('business-proposal.create') }}"
                                class="block px-4 py-2 hover:bg-gray-100">Business Proposal</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Links for Desktop -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="font-bold text-gray-600 hover:text-gray-900">EDP</a>
                <a href="{{ route('brand-franchise-proposal.create') }}"
                    class="font-bold text-gray-600 hover:text-gray-900">Brand Franchise
                    Proposal</a>
                <a href="#" class="font-bold text-gray-600 hover:text-gray-900">News & Media</a>
                <a href="#" class="font-bold text-gray-600 hover:text-gray-900">Our Impacts</a>
                <a href="pages/team.html" class="font-bold text-gray-600 hover:text-gray-900">Team</a>
            </div>

            <!-- CTA Buttons for Desktop -->
            <div class="hidden md:flex space-x-4">
                <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Contact</a>
                <a href="#"
                    class="bg-white border border-red-500 text-red-500 px-4 py-2 rounded hover:bg-red-500 hover:text-white">About
                    Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobileMenuButton" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <!-- Mobile Dropdown -->
            <div class="relative">
                <button id="mobileDropdownButton"
                    class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span>Opportunities</span>
                    <svg class="w-5 h-5 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="mobileDropdownContent" class="hidden px-3 py-2 bg-gray-50 rounded-md">
                    <a href="{{ route('intern-applications.create') }}" class="block px-4 py-2 hover:bg-gray-200">Intern
                        Application</a>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-200">job Application</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-200">Investment Proposal</a>
                    <a href="{{ route('business-proposal.create') }}" class="block px-4 py-2 hover:bg-gray-200">Business
                        Proposal</a>
                </div>
            </div>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">EDP</a>
            <a href="{{ route('brand-franchise-proposal.create') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Brand Franchise
                Proposal</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">News &
                Media</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Our
                Impacts</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Team</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">About
                Us</a>
            <a href="#"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Join
                Us</a>
        </div>
    </div>
</nav>
