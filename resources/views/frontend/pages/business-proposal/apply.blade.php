@extends('frontend.layouts.master')

@section('title', 'Business Proposal')

@section('content')
<div class="main-bg-color py-10 px-5">
    <div class="md:max-w-5xl mx-auto bg-transparent shadow-2xl rounded-lg border border-green-700 p-8">
        <h1 class="text-4xl font-bold text-white mb-8 text-center">Business Proposal</h1>

        <form action="{{ route('business-proposal.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Owner Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="owner_name" class="block text-lg font-semibold text-white mb-2">Owner Name</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="owner_name" name="owner_name" value="{{ old('owner_name') }}" required>
                    @error('owner_name')
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

                <!-- Organisation Name -->
                <div class="col-span-2 md:col-span-1">
                    <label for="organisation_name" class="block text-lg font-semibold text-white mb-2">Organisation Name</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="organisation_name" name="organisation_name" value="{{ old('organisation_name') }}" required>
                    @error('organisation_name')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Address -->
                <div class="col-span-2">
                    <label for="address" class="block text-lg font-semibold text-white mb-2">Address</label>
                    <textarea
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="address" name="address" rows="2" required>{{ old('address') }}</textarea>
                    @error('address')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Proposal Details -->
                <div class="col-span-2">
                    <label for="proposal_details" class="block text-lg font-semibold text-white mb-2">Proposal Details</label>
                    <textarea
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="proposal_details" name="proposal_details" rows="4" required>{{ old('proposal_details') }}</textarea>
                    @error('proposal_details')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Attachment Name -->
                <div class="col-span-2">
                    <label for="attachment_name" class="block text-lg font-semibold text-white mb-2">Attachment Name</label>
                    <input type="text"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="attachment_name" name="attachment_name" value="{{ old('attachment_name') }}" required>
                    @error('attachment_name')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Attachments -->
                <div class="col-span-2">
                    <label for="attachments" class="block text-lg font-semibold text-white mb-2">Attachments (PDF, Excel, DOCX, Photos, Zip)</label>
                    <input type="file"
                        class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300"
                        id="attachments" name="attachments[]" multiple accept=".pdf,.docx,.xlsx,.zip,.jpg,.jpeg,.png,.gif">
                    @error('attachments')
                        <div class="text-yellow-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-700 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-300">
                    Submit Proposal
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
