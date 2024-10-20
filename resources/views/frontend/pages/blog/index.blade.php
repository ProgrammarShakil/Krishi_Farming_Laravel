@extends('frontend.layouts.master')

@section('title', 'Our Blogs')

@section('content')
    <div class="main-bg-color py-10 px-5">
        <div class="mt-10 mx-auto bg-transparent shadow-2xl rounded-lg p-8">
            <h1 class="text-4xl font-bold text-white mb-3 text-center uppercase">Our Blogs</h1>

            <!-- BLOGS  -->
            <div class="container mx-auto px-4 pt-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    @foreach ($blogs as $blog)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="{{ asset('images/blogs/blogs (1).jpg') }}" alt="Blog Image"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mt-2">{{ $blog->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
