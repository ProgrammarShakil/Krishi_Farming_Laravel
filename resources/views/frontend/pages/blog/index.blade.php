@extends('frontend.layouts.master')

@section('title', 'Our Blogs')

@section('content')
    <div class="main-bg-color py-10 px-5">
        <div class="mt-16 mx-auto bg-transparent shadow-2xl rounded-lg p-8">
            <h1 class="text-4xl font-bold text-white mb-3 text-center uppercase">Our Blogs</h1>

            <!-- BLOGS  -->
            <div class="container mx-auto px-4 pt-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    @foreach ($blogs as $blog)
                        <div class="bg-teal-700 shadow-md rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-white">{{ $blog->title }}</h3>
                                <p class="text-white mt-2">{{ \Illuminate\Support\Str::limit($blog->description, 163) }}
                                </p>
                                <a href="{{ route('frontend.blog.details', ['id' => $blog->id]) }}"
                                    class="inline-block mt-4 px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg">Read
                                    More</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="mt-8">
                    {{ $blogs->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>

@endsection
