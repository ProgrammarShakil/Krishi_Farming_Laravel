@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

    <!-- HERO AREA  -->
    <div class="w-full">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Column 1 -->
                <div class="p-4">
                    <!-- Left Section -->
                    <div class=" text-center p-8">
                        <div class="typing-container">
                            <div class="text-3xl md:text-5xl font-bold text-white text-left">Harvest Fresh Crops: <br>
                                <div class="text-left">Sustainable <p
                                        class="typing-text font-bold md:text-5xl text-3xl text-white"></p>
                                </div>
                            </div>

                        </div>
                        <div class="text-left pt-5 text-xl mt-3 text-white">
                            We value the user experience prior to offering our service. This moment presents to
                            collaborate with us and elevate your brand to new heights. Let's seize this opportunity
                            and
                            propel your business forward together
                        </div>
                        <div class="mt-10 text-left">
                            <button
                                class="bg-green-600 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                Contact Us
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="p-4">
                    <!-- Right Section -->
                    <div class=" center-text-relative text-white text-center p-8">
                        <div class="ml-90 pie-chart">
                            <!-- Rotating labels in each segment -->
                            <div class="label label-1"><a href="https://bdkrishi.com" target="_blank">Products</a>
                            </div>
                            <div class="label label-2"><a href="https://bdkrishi.com" target="_blank">Services</a>
                            </div>
                            <div class="label label-3"><a href="https://bdkrishi.com" target="_blank">Agriculture
                                    <br> Segments</a></div>
                            <div class="label label-4"><a href="https://bdkrishi.com" target="_blank">Krishi <br>
                                    Market</a></div>
                            <div class="label label-5"><a href="https://bdkrishi.com" target="_blank">EDP</a>
                            </div>
                            <div class="label label-6"><a href="https://bdkrishi.com" target="_blank">Agriculture
                                    <br> Info</a></div>
                            <div class="label label-7"><a href="https://bdkrishi.com" target="_blank">Farmer <br>
                                    Connector</a></div>

                            <!-- Center text -->
                        </div>
                        <div class="center-text"><a href="https://bdkrishi.com" target="_blank">BD Krishi </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- PORTFOLIO  -->
    <div class="pt-20 pb-10">
        <!-- Portfolio Grid -->
        <div class="container mx-auto px-5">
            <h1 class="text-4xl font-bold text-center mb-8">Our Portfolio</h1>
            <div class="text-center mb-8">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    View All Projects
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (1).jpg') }}" alt="Newtech Ecommerce"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Innovative Farming Techniques for Sustainable Agriculture</h3>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (2).jpg') }}" alt="DashboardPix Real Estate Service"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Harvesting Success: Advanced Farming and Agri-Solutions</h3>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (3).jpg') }}" alt="Ozuaz Ecommerce Shop"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Empowering Agriculture with Modern Farming Practices</h3>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (4).jpg') }}" alt="Newtech Ecommerce"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Sustainable Farming Solutions for a Greener Future</h3>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (5).jpg') }}" alt="DashboardPix Real Estate Service"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Revolutionizing Agriculture: From Farm to Future</h3>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover cursor-pointer"
                        src="{{ asset('images/portfolio/portfolio (6).jpg') }}" alt="Ozuaz Ecommerce Shop"
                        onclick="openModal(this.src)">
                    <div class="p-5">
                        <h3 class="text-lg font-bold">Driving Innovation in Farming for Sustainable Growth</h3>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg p-5">
                <span class="cursor-pointer text-xl" onclick="closeModal()">✖️</span>
                <img id="modalImage" class="w-full h-auto">
            </div>
        </div>
    </div>


    <!-- Modal Background -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-lg">
            <div class="relative">
                <!-- Modal Close Button -->
                <button class="absolute top-2 right-2 text-gray-700" onclick="closeModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
                <!-- Modal Image -->
                <img id="modalImage" src="" alt="Modal Image" class="w-full h-96 object-cover">
            </div>
        </div>
    </div>

    <!-- BLOGS  -->
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Our Blogs</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (1).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Keys to Success in the Restaurant Business</h3>
                    <p class="text-gray-600 mt-2">At Netigian IT, we understand that every project is unique, and its
                        success lies in a well-crafted [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (2).jpg') }}" alt="Blog Image"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Improving Customer Satisfaction</h3>
                    <p class="text-gray-600 mt-2">Explore the best strategies for improving customer experiences
                        through
                        tech-driven solutions [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (3).jpg') }}" alt="Blog Image"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Modern Restaurant Management Tools</h3>
                    <p class="text-gray-600 mt-2">Discover cutting-edge tools and technologies that can transform your
                        restaurant management processes [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (4).jpg') }}" alt="Blog Image"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Keys to Success in the Restaurant Business</h3>
                    <p class="text-gray-600 mt-2">At Netigian IT, we understand that every project is unique, and its
                        success lies in a well-crafted [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (5).jpg') }}" alt="Blog Image"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Improving Customer Satisfaction</h3>
                    <p class="text-gray-600 mt-2">Explore the best strategies for improving customer experiences
                        through
                        tech-driven solutions [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/blogs/blogs (6).jpg') }}" alt="Blog Image"
                    class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800">Modern Restaurant Management Tools</h3>
                    <p class="text-gray-600 mt-2">Discover cutting-edge tools and technologies that can transform your
                        restaurant management processes [...]</p>
                    <a href="#"
                        class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                        More →</a>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEO STORIES  -->
    <div class="slider-container mb-5">
        <div class="text-center pb-5">
            <h2 class="text-4xl font-bold mb-3">Video Stories</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item border-2">
                <iframe width="430" height="315"
                    src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315"
                    src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315"
                    src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315"
                    src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text-center">
            <button class="animated-button mt-5">
                <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                <span class="ml-3">More Video</span>
            </button>
        </div>
    </div>

    <!-- PHOTO GALLERY -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-center mb-8 mt-4">Photo Gallery</h1>

        <!-- Photo Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Image 1 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/istockphoto-1349772438-612x612.webp') }}"
                    alt="Ecommerce Product Ads Edit" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Ecommerce Product Ads Edit</a>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/istockphoto-168351414-612x612.webp') }}"
                    alt="Car Racing Video Edit" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Car Racing Video Edit</a>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/istockphoto-649730320-612x612.webp') }}"
                    alt="Almonds Pouch Design" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Almonds Pouch Design</a>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/istockphoto-965148388-612x612.webp') }}"
                    alt="Ecommerce Product Ads Edit" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Ecommerce Product Ads Edit</a>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/photo-1692369194934-e3e2dc0d8d0d.jpg') }}"
                    alt="Car Racing Video Edit" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Car Racing Video Edit</a>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/premium_photo-1661909621192-98cd04208d8e.jpg') }}"
                    alt="Almonds Pouch Design" class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Almonds Pouch Design</a>
                </div>
            </div>

        </div>
    </div>

    <!-- ALICE AREA  -->
    <div class="slider-container mt-5">
        <div class="text-center pb-5">
            <h2 class="text-3xl font-bold">Our Allies</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item border-2">
                <img src="{{ asset('images/alice/alience2.jpg') }}" alt="Image 1">
            </div>
            <div class="item border-2">
                <img src="{{ asset('images/alice/bti.jpg') }}" alt="Image 2">
            </div>
            <div class="item border-2">
                <img src="{{ asset('images/alice/michigin.jpg') }}" alt="Image 3">
            </div>
            <div class="item border-2">
                <img src="{{ asset('images/alice/michigin.jpg') }}" alt="Image 4">
            </div>
        </div>
    </div>

    <!-- FOOTER  -->
    <footer class="main-bg-color text-white py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 text-center md:text-left">
            <!-- Logo and tagline -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Farming Future Bangladesh"
                    class="mb-3 mx-auto w-24 w-32 lg:w-96">
                <p class="uppercase tracking-wide">Evidence • Engage • Empower</p>
            </div>

            <!-- About Us section -->
            <div>
                <h3 class="font-bold mb-3">About Us</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Our Theory of Change</a></li>
                    <li><a href="#" class="hover:underline">Our Impacts</a></li>
                    <li><a href="#" class="hover:underline">Our Leadership</a></li>
                    <li><a href="#" class="hover:underline">Diversity & Inclusion</a></li>
                </ul>
            </div>
            <!-- Resources section -->
            <div>
                <h3 class="font-bold mb-3">Resources</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Publication</a></li>
                    <li><a href="#" class="hover:underline">News & Views</a></li>
                    <li><a href="#" class="hover:underline">TV Talk Show</a></li>
                    <li><a href="#" class="hover:underline">Press & Media</a></li>
                    <li><a href="#" class="hover:underline">Downloads</a></li>
                </ul>
            </div>
            <!-- Allies section -->
            <div>
                <h3 class="font-bold mb-3">Our Allies</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Alliance for Science</a></li>
                    <li><a href="#" class="hover:underline">Boyce Thompson Institute</a></li>
                    <li><a href="#" class="hover:underline">Cornell University</a></li>
                    <li><a href="#" class="hover:underline">Michigan State University</a></li>
                    <li><a href="#" class="hover:underline">Join Us+</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div
            class="container mx-auto mt-10 border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-center md:justify-between items-center text-center">
            <div>
                <p>©2024 Copyright All rights reserved <a href="https://bdkrishi.com" class="text-green-400">BD
                        KRISHI</a></p>
            </div>
            <div class="flex space-x-4 mt-4 md:mt-0 justify-center">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        </div>
    </footer>
@endsection
