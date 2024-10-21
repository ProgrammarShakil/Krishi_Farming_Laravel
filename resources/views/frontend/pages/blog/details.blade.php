@extends('frontend.layouts.master')

@section('title', 'Blogs Details')

@section('content')
    <div class="main-bg-color py-10 px-5">
        <div class="md:max-w-5xl mt-20 mx-auto bg-transparent shadow-2xl rounded-lg p-8">
            <h1 class="text-4xl font-bold text-white text-left">{{ $details->title }}</h1>

            <!-- BLOGS  -->
            <div class="container mx-auto px-4 pt-10">
                <div class="shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $details->image) }}" alt="Blog Image" class="w-full object-cover">
                </div>
            </div>
            <p class="text-white mt-5">{{ $details->description }}
            </p>
        </div>
    </div>

@endsection
