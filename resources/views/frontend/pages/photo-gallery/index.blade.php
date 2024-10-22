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
                            <img src="{{ asset('storage/' . $gallery->photo) }}" alt="{{ $gallery->title }}"
                                class="object-cover w-full h-full rounded-lg shadow-lg cursor-pointer"
                                onclick="showImageModal('{{ asset('storage/' . $gallery->photo) }}')">
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Links -->
                <div class="mt-8">
                    {{ $gallaries->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal to display image -->
    <div id="imageModal" class="z-30 fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <div class="relative bg-white p-5 rounded-lg shadow-2xl max-w-3xl w-full">
            <span id="closeModal" class="absolute top-1 right-2 text-black text-3xl cursor-pointer">&times;</span>
            <div class="border-b pb-3 mb-4">
                <p class="text-black text-lg font-semibold">{{ $gallery->title }}</p>
            </div>
            <div class="relative">
                <img id="modalImage" src="" class="w-full max-h-96 rounded-lg shadow-lg object-cover" alt="Selected Image">
            </div>
            <div class="mt-4 text-gray-700">
                <p>{{ $gallery->description }}</p>
            </div>
        </div>
    </div>

    <!-- Custom JavaScript -->
    <script>
        function showImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        document.getElementById('closeModal').onclick = function() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('imageModal')) {
                document.getElementById('imageModal').classList.add('hidden');
            }
        }
    </script>
@endsection
