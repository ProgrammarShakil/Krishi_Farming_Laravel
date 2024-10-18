@extends('frontend.layouts.master')

@section('title', 'Meet Our Team')

@section('content')
    <div class="main-bg-color pt-10 pb-10 md:pb-24">
        <h1 class="text-4xl mt-20 font-bold text-center text-white mb-10">Meet Our Team</h1>

        <div class="px-4 lg:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($team as $member)
                <div class="bg-main-color text-white p-6 border border-green-700 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img class="w-16 h-16 rounded-full object-cover" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                        <div class="ml-4">
                            <h2 class="text-lg font-bold">{{ $member->name }}</h2>
                            <p class="text-lg text-green-400">{{ $member->position }}</p>
                        </div>
                    </div>
                    <p class="text-white mb-4">{{ $member->description }}</p>
                    <div class="flex space-x-4">
                        @if ($member->facebook_link)
                            <a href="{{ $member->facebook_link }}" class="text-green-500 hover:text-green-600" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        @endif
                        @if ($member->twitter_link)
                            <a href="{{ $member->twitter_link }}" class="text-green-500 hover:text-green-600" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                        @endif
                        @if ($member->instagram_link)
                            <a href="{{ $member->instagram_link }}" class="text-green-500 hover:text-green-600" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        @endif
                        @if ($member->youtube_link)
                            <a href="{{ $member->youtube_link }}" class="text-green-500 hover:text-green-600" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        @endif
                        @if ($member->linkedin_link)
                            <a href="{{ $member->linkedin_link }}" class="text-green-500 hover:text-green-600" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin"></i>
                                <span class="sr-only">linkedin</span>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <hr>
@endsection
