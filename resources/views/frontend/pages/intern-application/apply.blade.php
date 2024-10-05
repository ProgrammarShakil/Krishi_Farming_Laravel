@extends('frontend.layouts.master')

@section('title', 'Intern Apply')

@section('content')
<div class="main-bg-color py-10 px-5">
    <div class="md:max-w-5xl mx-auto bg-transparent shadow-2xl rounded-lg border border-green-700 p-8">
        <h1 class="text-4xl font-bold text-white mb-8 text-center">Intern Application</h1>

        <form action="{{ route('intern-applications.store') }}" method="POST" enctype="multipart/form-data" novalidate>
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

                <!-- Phone Number -->
                <div class="col-span-2 md:col-span-1">
                    <label for="phone_number" class="block text-lg font-semibold text-white mb-2">Phone Number</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                    @error('phone_number')
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

                <!-- Educational Qualification -->
                <div class="col-span-2 md:col-span-1">
                    <label for="education" class="block text-lg font-semibold text-white mb-2">Educational Qualification</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="education" name="education" value="{{ old('education') }}" required>
                    @error('education')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Special Skills -->
                <div class="col-span-2">
                    <label for="skills" class="block text-lg font-semibold text-white mb-2">Special Skills</label>
                    <textarea
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="skills" name="skills" rows="3" required>{{ old('skills') }}</textarea>
                    @error('skills')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Areas of Interest -->
                <div class="col-span-2">
                    <label for="interest" class="block text-lg font-semibold text-white mb-2">Areas of Interest</label>
                    <textarea
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="interest" name="interest" rows="3" required>{{ old('interest') }}</textarea>
                    @error('interest')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Questions Section -->
                @foreach (['q1' => '1. How can you use your skills to solve problems in agriculture?',
                             'q2' => '2. How can you help BDKrishi succeed?',
                             'q3' => '3. What are your career goals, and how can BDKrishi help you achieve them?',
                             'q4' => '4. Tell us about your past projects and their impact.'] as $key => $question)
                    <div class="col-span-2">
                        <label for="{{ $key }}" class="block text-lg font-semibold text-white mb-2">{{ $question }}</label>
                        <textarea
                            class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                            id="{{ $key }}" name="{{ $key }}" rows="4" required>{{ old($key) }}</textarea>
                        @error($key)
                            <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach

                <!-- Resume -->
                <div class="col-span-2 md:col-span-1">
                    <label for="resume" class="block text-lg font-semibold text-white mb-2">Resume (PDF or DOCX)</label>
                    <input type="file"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="resume" name="resume" accept=".pdf,.docx" required>
                    @error('resume')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Photo -->
                <div class="col-span-2 md:col-span-1">
                    <label for="photo" class="block text-lg font-semibold text-white mb-2">Photo (JPEG, PNG, JPG, GIF)</label>
                    <input type="file"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="photo" name="photo" accept="image/*" required>
                    @error('photo')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-700 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-300">
                    Submit Application
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
                    progressBar: true,
                    timeOut: 5000 // 5 seconds timeout
                });
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 5000
                });
            @endif
        });
    </script>
@endsection
