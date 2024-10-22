@extends('frontend.layouts.master')

@section('title', 'Blogs Details')

@section('content')
    <div class="py-5 px-5">
        <div class="md:max-w-1xl mt-20 mx-auto bg-white shadow-2xl rounded-lg p-8">
            <h1 class="text-3xl font-bold text-left">{{ $details->title }}</h1>

            <!-- BLOGS  -->
            {{-- <div class="container mx-auto px-4 pt-10">
                <div class="flex justify-center">
                    <img src="{{ asset('storage/' . $details->image) }}" alt="Blog Image" class="w-3/5 shadow-md rounded-lg overflow-hidden">
                </div>
            </div> --}}

            <div class="ql-snow">
                <div class="ql-editor">
                    {!! $details->content !!}
                </div>
            </div>
        </div>
    </div>

@endsection
