@extends('frontend.layouts.master')

@section('title', 'Contact Us')

@section('content')
<div class="main-bg-color py-10 px-5">
    <div class="md:max-w-5xl mt-20 mx-auto bg-transparent shadow-2xl rounded-lg border border-green-700 p-8">
        <h1 class="text-4xl font-bold text-white mb-8 text-center">Contact Us</h1>

        <form action="{{ route('frontend.contact.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="name" class="block text-lg font-semibold text-white mb-2">Name</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="col-span-2 md:col-span-1">
                    <label for="email" class="block text-lg font-semibold text-white mb-2">Email</label>
                    <input type="email"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="col-span-2">
                    <label for="phone_number" class="block text-lg font-semibold text-white mb-2">Phone Number</label>
                    <input type="phone_number"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                    @error('phone_number')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Subject -->
                <div class="col-span-2">
                    <label for="subject" class="block text-lg font-semibold text-white mb-2">Subject</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="subject" name="subject" value="{{ old('subject') }}" required>
                    @error('subject')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Message -->
                <div class="col-span-2">
                    <label for="message" class="block text-lg font-semibold text-white mb-2">Message</label>
                    <textarea
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-700 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-300">
                    Send Message <i class="fas fa-paper-plane pl-1" style="transform: rotate(50deg);"></i>

                </button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        @if (session('success'))
            toastr.success('{{ session('success') }}', 'Success', {
                closeButton: true,
                progressBar: false,
                timeOut: 5000 // 5 seconds timeout
            });
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}', 'Error', {
                closeButton: true,
                progressBar: false,
                timeOut: 5000
            });
        @endif
    });
</script>
@endsection
