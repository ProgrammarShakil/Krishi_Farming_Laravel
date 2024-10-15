@extends('frontend.layouts.master')

@section('title', $page->title)

@section('content')
    <div class="py-10 px-5">
        <div class="mt-10 mb-5 mx-auto rounded-lg p-8">
            <h1 class="text-4xl font-bold text-gray-700 mb-8 text-center">{{ $page->title }}</h1>
            <div>
                {!! $page->content !!}
                {{ $page->content }}
            </div>

        </div>
    </div>
@endsection
