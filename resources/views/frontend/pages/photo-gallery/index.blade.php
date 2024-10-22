@extends('frontend.layouts.master')

@section('title', 'Photo Gallery')

@section('content')
    <div class="main-bg-color py-10 px-5">
        <div class="mt-10 mx-auto bg-transparent shadow-2xl rounded-lg p-8">
            <h1 class="text-4xl font-bold text-white mb-8 text-center uppercase">Photo Gallery</h1>

            <!-- PHOTO GALLERY -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 md:mt-10">
                <!-- Photo Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($gallaries as $gallery)
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
            </div>

        </div>
    </div>

@endsection
