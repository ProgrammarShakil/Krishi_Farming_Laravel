@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

    <!-- HERO AREA  -->
    <div id="particles-js" class="pb-20"></div>
    <div class="pt-20 relative flex flex-col items-center justify-center md:h-screen text-center text-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 justify-items-center">
                <!-- Column 1 -->
                <div class="pt-2 md:p-4">
                    <!-- Left Section -->
                    <div class=" text-center  md:p-8">
                        <div class="typing-container">
                            <div class="text-lg md:text-5xl font-bold text-white text-left">Harvest Fresh Crops:

                                <div class="text-left">Sustainable <p
                                        class="typing-text font-bold text-lg md:text-5xl text-white"></p>
                                </div>
                            </div>

                        </div>
                        <div class="text-left pt-1 md:pt-5 text-sm md:text-xl mt-3 text-white">
                            We value the user experience prior to offering our service. This moment presents to
                            collaborate with us and elevate your brand to new heights. Let's seize this opportunity
                            and
                            propel your business forward together
                        </div>
                        <div class="md:mt-10 mt-3 text-left">
                            <button
                                class="bg-green-600 hover:bg-red-600 text-white font-semibold py-1 px-2 md:py-2 md:px-4 rounded-lg shadow-md transition duration-300 ease-in-out">
                                Contact Us
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="md:p-4">
                    <!-- Right Section -->
                    <div class="center-text-relative text-white md:text-center p-0 md:p-8">
                        <div class="w-full mx-auto">
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
    </div>


    <!-- PORTFOLIO  -->
    <div class="container mx-auto px-5 py-10">
        <div class=" text-center mb-8">
            <h1 class="text-4xl font-bold">What we do?</h1>
            <p class="py-3 text-lg">We share evidence, engage stakeholders, and empower communities <br> for a more
                dignified and prosperous future.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-3">
            <!-- Card 1 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (1).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Agriculture <br> Segments</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (2).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Food Security</p>
                    </div>
                </div>
            </div>


            <!-- Card 3 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (3).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Krishi Market</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (4).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">EDP</p>
                    </div>
                </div>
            </div>


            <!-- Card 5 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (5).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Agriculture Info</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (6).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Farmer Connector</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (7).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Services</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="flex flex-col items-center justify-center space-y-2">
                <div
                    class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 bg-green-700 transform transition-transform duration-300 hover:scale-110">
                    <div class="flex flex-col items-center justify-center">
                        <img src="{{ asset('images/portfolio/portfolio (8).png') }}" alt="Food Security Icon"
                            class="h-12 w-12">
                        <p class="text-white font-semibold text-center mt-2">Products</p>
                    </div>
                </div>
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
                <img src="{{ asset('images/blogs/blogs (2).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
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
                <img src="{{ asset('images/blogs/blogs (3).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
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
                <img src="{{ asset('images/blogs/blogs (4).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
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
                <img src="{{ asset('images/blogs/blogs (5).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
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
                <img src="{{ asset('images/blogs/blogs (6).jpg') }}" alt="Blog Image" class="w-full h-48 object-cover">
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
        <div class="text-center">
            <a href="#"
                class="inline-block mt-4 px-4 py-3 text-white bg-green-700 hover:bg-green-800 rounded-md">More Blogs →</a>
        </div>
    </div>

    <!-- VIDEO STORIES  -->
    <div class="slider-container mb-5">
        <div class="text-center pb-5">
            <h2 class="text-4xl font-bold mb-3">Video Stories</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item border-2">
                <iframe width="430" height="315" src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315" src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315" src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item border-2">
                <iframe width="430" height="315" src="https://www.youtube.com/embed/NcSX5oAlKDQ?si=7HnALdmUUwlV2j1Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text-center">
            <div class="text-center">
                <a href="#"
                    class="inline-block mt-4 px-4 py-3 text-white bg-green-700 hover:bg-green-800 rounded-md">More Videos
                    →</a>
            </div>
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
                <img src="{{ asset('images/gallery/istockphoto-168351414-612x612.webp') }}" alt="Car Racing Video Edit"
                    class="object-cover w-full h-full rounded-lg shadow-lg">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                    <a href="#" class="text-white text-lg font-semibold">Car Racing Video Edit</a>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="relative group">
                <img src="{{ asset('images/gallery/istockphoto-649730320-612x612.webp') }}" alt="Almonds Pouch Design"
                    class="object-cover w-full h-full rounded-lg shadow-lg">
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
                <img src="{{ asset('images/gallery/photo-1692369194934-e3e2dc0d8d0d.jpg') }}" alt="Car Racing Video Edit"
                    class="object-cover w-full h-full rounded-lg shadow-lg">
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
        <div class="text-center">
            <a href="#" class="inline-block mt-4 px-4 py-3 text-white bg-green-700 hover:bg-green-800 rounded-md">More Photos →</a>
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
@endsection
