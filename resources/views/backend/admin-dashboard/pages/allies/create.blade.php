@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Create Ally')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3 class="mb-4">Create Ally</h3>
                    <form action="{{ route('admin.allies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="allies_title">Ally Title:</label>
                            <input type="text" class="form-control" id="allies_title" name="allies_title"
                                value="{{ old('allies_title') }}" required>
                            @error('allies_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="allies_image">Ally Image:</label>
                            <input type="file" class="form-control p-1" id="allies_image" name="allies_image" required>
                            @error('allies_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div id="file-input-container">
                            <input type="file"
                                class="block w-full border border-gray-300 rounded-lg py-3 px-4 text-white bg-transparent leading-tight focus:outline-none focus:border-green-500 transition duration-300 mb-4"
                                name="attachments[]" accept=".pdf,.docx,.xlsx,.zip,.jpg,.jpeg,.png,.gif">
                        </div> --}}

                        <button class="mt-3 btn btn-primary" type="submit">Create Ally</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toastr Notifications -->
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
