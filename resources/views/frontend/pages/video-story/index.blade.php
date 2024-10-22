@extends('frontend.layouts.master')

@section('title', 'Video Stories')

@section('content')
    <div class="main-bg-color p-5">
        <div class="mt-20 mx-auto bg-transparent shadow-2xl rounded-lg p-8">
            <h1 class="text-4xl font-bold text-white text-center uppercase">Our Video Stories</h1>
            <!-- VIDEO STORIES  -->
            <div class="my-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($videos as $video)
                        <div class="p-4 rounded-lg bg-teal-700">
                            <div class="text-white mb-4 capitalize text-xl">{{$video->title}}</div>
                            @php
                                $videoUrl = $video->video;
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
                                <iframe class="rounded-lg" width="100%" height="250" src="{{ $embedUrl }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            @else
                                <p>Invalid video URL</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
