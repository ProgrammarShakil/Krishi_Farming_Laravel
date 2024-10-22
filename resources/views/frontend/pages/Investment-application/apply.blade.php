@extends('frontend.layouts.master')

@section('title', 'Investment Apply')

@section('content')
    <div class="main-bg-color py-10 px-5">
        <div class="md:max-w-5xl mt-20 mx-auto bg-transparent shadow-2xl rounded-lg border border-green-700 p-8">
            <h1 class="text-3xl font-semibold text-white mb-8 text-center">Investment Application for
                {{ $investment->project_name }}</h1>

            <form action="{{ route('frontend.pages.investment.applicants.store') }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf

                <input type="hidden" name="investment_proposal_id" value="{{ $investment->id }}">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Proposer Name -->
                    <div class="col-span-2 md:col-span-1">
                        <label for="proposer_name" class="block text-lg font-semibold text-white mb-2">Proposer Name</label>
                        <input type="text"
                            class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                            id="proposer_name" name="proposer_name" value="{{ old('proposer_name') }}" required>
                        @error('proposer_name')
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

                    <!-- Address -->
                    <div class="col-span-2 md:col-span-1">
                        <label for="address" class="block text-lg font-semibold text-white mb-2">Address</label>
                        <input type="text"
                            class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                            id="address" name="address" value="{{ old('address') }}" required>
                        @error('address')
                            <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Proposal Amount -->
                    <div class="col-span-2">
                        <label for="proposal_amount" class="block text-lg font-semibold text-white mb-2">Proposal
                            Amount</label>
                        <input type="text"
                            class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                            id="proposal_amount" name="proposal_amount" value="{{ old('proposal_amount') }}" required>
                        @error('proposal_amount')
                            <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Proposal Details -->
                    <div class="col-span-2">
                        <label for="proposal_details" class="block text-lg font-semibold text-white mb-2">Proposal
                            Details</label>
                        <textarea
                            class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                            id="proposal_details" name="proposal_details" rows="4" required>{{ old('proposal_details') }}</textarea>
                        @error('proposal_details')
                            <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Attachments -->
                    <div class="col-span-2">
                        <label for="attachments" class="block text-lg font-semibold text-white mb-2">Attachments (PDF,
                            Excel, DOCX, Photos, Zip)</label>

                        <!-- File Input Container for dynamic addition of new file inputs -->
                        <div id="file-input-container">
                            <input type="file"
                                class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300 mb-4"
                                name="attachments[]" accept=".pdf,.docx,.xlsx,.zip,.jpg,.jpeg,.png,.gif">
                        </div>

                        <!-- Add More Button -->
                        <button type="button" id="add-more-files"
                            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-300">
                            Add More Files
                        </button>

                        @error('attachments')
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
        document.getElementById('add-more-files').addEventListener('click', function() {
            // Create a new div to hold the file input and remove button
            const fileInputWrapper = document.createElement('div');
            fileInputWrapper.className = 'file-input-wrapper mb-4';

            // Create a new input element for file upload
            const newFileInput = document.createElement('input');
            newFileInput.type = 'file';
            newFileInput.name = 'attachments[]';
            newFileInput.accept = '.pdf,.docx,.xlsx,.zip,.jpg,.jpeg,.png,.gif';
            newFileInput.className =
                'block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300';

            // Create a remove button
            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.textContent = 'Remove';
            removeButton.className =
                'bg-red-500 hover:bg-red-400 text-white font-bold mt-2 py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-red-300 transition duration-300';

            // When the remove button is clicked, remove the entire wrapper (file input + button)
            removeButton.addEventListener('click', function() {
                fileInputWrapper.remove();
            });

            // Append the file input and remove button to the wrapper
            fileInputWrapper.appendChild(newFileInput);
            fileInputWrapper.appendChild(removeButton);

            // Append the wrapper to the file input container
            document.getElementById('file-input-container').appendChild(fileInputWrapper);
        });

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
