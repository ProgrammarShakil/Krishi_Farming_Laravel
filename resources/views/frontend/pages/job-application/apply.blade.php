@extends('frontend.layouts.master')

@section('title', 'Job Apply')

@section('content')
<div class="max-w-2xl mx-auto bg-transparent shadow-2xl rounded-lg border border-green-700 p-8 mt-5">
    <h1 class="text-4xl font-bold text-white mb-8 text-center">Job Application</h1>

    <form action="{{ route('job-applications.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Left Column: Name and Email -->
            <div class="col-span-2">
                <label for="name" class="block text-lg font-semibold text-white mb-2">Name</label>
                <input type="text" class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white leading-tight focus:outline-none focus:border-blue-500 transition duration-300" id="name" name="name" required>
            </div>

            <div class="col-span-2">
                <label for="email" class="block text-lg font-semibold text-white mb-2">Email</label>
                <input type="email" class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white leading-tight focus:outline-none focus:border-blue-500 transition duration-300" id="email" name="email" required>
            </div>

            <!-- Right Column: Resume and Photo -->
            <div class="col-span-1">
                <label for="resume" class="block text-lg font-semibold text-white mb-2">Resume (PDF or DOCX)</label>
                <input type="file" class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white leading-tight focus:outline-none focus:border-blue-500 transition duration-300" id="resume" name="resume" accept=".pdf,.docx" required>
            </div>

            <div class="col-span-1">
                <label for="photo" class="block text-lg font-semibold text-white mb-2">Photo (JPEG, PNG, JPG, GIF)</label>
                <input type="file" class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white leading-tight focus:outline-none focus:border-blue-500 transition duration-300" id="photo" name="photo" accept="image/*" required>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="bg-green-700 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-300">
                Submit Application
            </button>
        </div>
    </form>
</div>

<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!-- Include Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        @if(session('success'))
            toastr.success('{{ session('success') }}', 'Success!', {
                closeButton: true,
                progressBar: true,
            });
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}', 'Error!', {
                closeButton: true,
                progressBar: true,
            });
        @endif
    });
</script>
@endsection
