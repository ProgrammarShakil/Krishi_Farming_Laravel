@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

    <!-- HERO AREA  -->
    <div id="particles-js" class="pb-20"></div>
    <div class="pt-24 md:pt-5 relative flex flex-col items-center justify-center md:h-screen text-center text-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 justify-items-center">
                <!-- Column 1 -->
                <div class="pt-2 md:p-4">
                    <!-- Left Section -->
                    <div class=" text-center  md:p-8">
                        <div class="text-2xl md:text-5xl pt-2 md:pt-5 pb-0 font-bold text-white text-left">Harvest Fresh Crops:
                            Sustainable Farming

                            <div class="text-left">
                                {{-- <div>Sustainable</div> --}}
                                {{-- <p class="typing-text px-2 font-bold text-lg md:text-5xl text-white"></p> --}}
                            </div>
                        </div>
                        <div class="text-left py-2 md:pt-1 mt-2 md:mt-5 text-sm md:text-xl text-white">
                            We value the user experience prior to offering our service. This moment presents to
                            collaborate with us and elevate your brand to new heights. Let's seize this opportunity
                            and
                            propel your business forward together
                        </div>
                        <div class="my-10 md:mt-10 mt-4 text-left">
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
                                <div class="label label-1"><a href="{{ $segment->segment_1_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_1_name) !!}</a>
                                </div>
                                <div class="label label-2"><a href="{{ $segment->segment_2_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_2_name) !!}</a>
                                </div>
                                <div class="label label-3"><a href="{{ $segment->segment_3_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_3_name) !!}</div>
                                <div class="label label-4"><a href="{{ $segment->segment_4_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_4_name) !!}<br>
                                </div>
                                <div class="label label-5"><a href="{{ $segment->segment_5_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_5_name) !!}</a>
                                </div>
                                <div class="label label-6"><a href="{{ $segment->segment_6_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_6_name) !!}</div>
                                <div class="label label-7"><a href="{{ $segment->segment_7_link }}"
                                        target="_blank">{!! str_replace(' ', '<br>', $segment->segment_7_name) !!}<br>
                                </div>

                                <!-- Center text -->
                            </div>
                            <div class="center-text"><a href="{{ $segment->main_segment_link }}"
                                    target="_blank">{{ $segment->main_segment_name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- PORTFOLIO  -->
    <div class="container mx-auto px-5 pt-24 pb-14 md:py-10">
        <div class=" text-center mb-8">
            <h2 class="text-3xl font-bold uppercase">What we do?</h2>
            <p class="py-3 text-lg">We share evidence, engage stakeholders, and empower communities <br> for a more
                dignified and prosperous future.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mt-3">
            @foreach ($portfolios as $portfolio)
                <!-- Dynamic Portfolio Card -->
                <a href="{{ $portfolio->link }}" target="_blank">
                    <div class="flex flex-col items-center justify-center space-y-2">
                        <div
                            class="border-2 border-gray-300 w-36 h-36 rounded-full p-6 hover:scale-1 main-bg-color transform transition-transform duration-300 hover:scale-110">
                            <div class="flex flex-col items-center justify-center">
                                <!-- Dynamic Image -->
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    class="h-12 w-12">
                                <!-- Dynamic Title -->
                                <p class="text-white font-semibold text-center mt-2">{{ $portfolio->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>


    <!-- PHOTO GALLERY -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 md:mt-10">
        <h1 class="text-3xl font-bold text-center mb-8 mt-4 uppercase">Photo Gallery</h1>

        <!-- Photo Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($gallaries->take(6) as $gallery)
                <div class="relative group">
                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Ecommerce Product Ads Edit"
                        class="object-cover w-full h-full rounded-lg shadow-lg">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 hover:rounded-lg transition-opacity duration-300">
                        <a href="{{ route('frontend.photo_gallery.index') }}"
                            class="text-white text-lg font-semibold px-4">{{ $gallery->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a href="{{ route('frontend.photo_gallery.index') }}">
                <button
                    class="flex items-center mt-8 px-6 py-3 bg-teal-700 text-white font-medium rounded-lg hover:bg-teal-600 transition duration-300 ease-in-out">
                    <span>See More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </a>
        </div>
    </div>


    <!-- VIDEO STORIES  -->
    <div class="slider-container my-10">
        <div class="text-center py-5">
            <h2 class="text-3xl font-bold mb-3 uppercase">Video Stories</h2>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach ($videos as $video)
                <div class="item">
                    @php
                        $videoUrl = $video->video;
                        // Initialize embedUrl as null
                        $embedUrl = null;

                        // Check if it's a standard YouTube URL (e.g., https://www.youtube.com/watch?v=video_id)
if (strpos($videoUrl, 'youtube.com/watch?v=') !== false) {
    $videoId = substr($videoUrl, strpos($videoUrl, 'v=') + 2, 11);
    $embedUrl = "https://www.youtube.com/embed/$videoId";
}
// Check if it's a shortened YouTube URL (e.g., https://youtu.be/video_id)
                        elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                            $videoId = substr($videoUrl, strrpos($videoUrl, '/') + 1);
                            $embedUrl = "https://www.youtube.com/embed/$videoId";
                        }
                    @endphp

                    @if ($embedUrl)
                        <iframe class="rounded-lg" width="350" height="300" src="{{ $embedUrl }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @else
                        <p>Invalid video URL</p>
                    @endif
                </div>
            @endforeach


        </div>
        <div class="flex justify-center">
            <a href="{{ route('frontend.video_story.index') }}">
                <button
                    class="flex items-center mt-8 px-6 py-3 bg-teal-700 text-white font-medium rounded-lg hover:bg-teal-600 transition duration-300 ease-in-out">
                    <span>See More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </a>
        </div>
    </div>


    <!-- BLOGS  -->
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center uppercase mb-8">Our Blogs</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            @foreach ($blogs->take(6) as $blog)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $blog->title }}</h3>
                        <p class="text-gray-600 mt-2">{{ \Illuminate\Support\Str::limit($blog->description, 163) }}</p>
                        <a href="{{ route('frontend.blog.details', ['id' => $blog->id]) }}"
                            class="inline-block mt-4 px-4 py-2 text-white bg-teal-600 hover:bg-teal-700 rounded-lg">Read
                            More</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="flex justify-center">
            <a href="{{ route('frontend.blog.index') }}">
                <button
                    class="flex items-center mt-8 px-6 py-3 bg-teal-700 text-white font-medium rounded-lg hover:bg-teal-600 transition duration-300 ease-in-out">
                    <span>See More</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </a>
        </div>
    </div>

    <!-- ALICE AREA  -->
    <div class="slider-container my-10">
        <div class="text-center pb-5">
            <h2 class="text-3xl font-bold uppercase">Our Allies</h2>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach ($allies as $ally)
                <div class="item border-2">
                    <img src="{{ asset('storage/' . $ally->allies_image) }}" alt="{{ $ally->allies_title }}">
                </div>
            @endforeach
        </div>
    </div>

@endsection
