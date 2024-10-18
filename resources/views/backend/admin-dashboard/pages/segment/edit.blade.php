@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Segment')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Segment</h1>

        <!-- Segment Edit Form -->
        <form action="{{ route('admin.segments.update', $segment->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Specify the PUT method for updating -->

            <!-- Main Segment Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="main_segment_name">Main_Segment Name</label>
                    <input type="text" name="main_segment_name" class="form-control" id="main_segment_name" value="{{ old('main_segment_name', $segment->main_segment_name) }}" required>
                    @error('main_segment_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="main_segment_link">Main_Segment Link</label>
                    <input type="url" name="main_segment_link" class="form-control" id="main_segment_link" value="{{ old('main_segment_link', $segment->main_segment_link) }}" required>
                    @error('main_segment_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 1 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_1_name">Segment_1 Name</label>
                    <input type="text" name="segment_1_name" class="form-control" id="segment_1_name" value="{{ old('segment_1_name', $segment->segment_1_name) }}" required>
                    @error('segment_1_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_1_link">Segment_1 Link</label>
                    <input type="url" name="segment_1_link" class="form-control" id="segment_1_link" value="{{ old('segment_1_link', $segment->segment_1_link) }}" required>
                    @error('segment_1_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 2 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_2_name">Segment_2 Name</label>
                    <input type="text" name="segment_2_name" class="form-control" id="segment_2_name" value="{{ old('segment_2_name', $segment->segment_2_name) }}" required>
                    @error('segment_2_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_2_link">Segment_2 Link</label>
                    <input type="url" name="segment_2_link" class="form-control" id="segment_2_link" value="{{ old('segment_2_link', $segment->segment_2_link) }}" required>
                    @error('segment_2_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 3 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_3_name">Segment_3 Name</label>
                    <input type="text" name="segment_3_name" class="form-control" id="segment_3_name" value="{{ old('segment_3_name', $segment->segment_3_name) }}" required>
                    @error('segment_3_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_3_link">Segment_3 Link</label>
                    <input type="url" name="segment_3_link" class="form-control" id="segment_3_link" value="{{ old('segment_3_link', $segment->segment_3_link) }}" required>
                    @error('segment_3_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 4 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_4_name">Segment_4 Name</label>
                    <input type="text" name="segment_4_name" class="form-control" id="segment_4_name" value="{{ old('segment_4_name', $segment->segment_4_name) }}" required>
                    @error('segment_4_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_4_link">Segment_4 Link</label>
                    <input type="url" name="segment_4_link" class="form-control" id="segment_4_link" value="{{ old('segment_4_link', $segment->segment_4_link) }}" required>
                    @error('segment_4_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 5 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_5_name">Segment_5 Name</label>
                    <input type="text" name="segment_5_name" class="form-control" id="segment_5_name" value="{{ old('segment_5_name', $segment->segment_5_name) }}" required>
                    @error('segment_5_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_5_link">Segment_5 Link</label>
                    <input type="url" name="segment_5_link" class="form-control" id="segment_5_link" value="{{ old('segment_5_link', $segment->segment_5_link) }}" required>
                    @error('segment_5_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 6 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_6_name">Segment_6 Name</label>
                    <input type="text" name="segment_6_name" class="form-control" id="segment_6_name" value="{{ old('segment_6_name', $segment->segment_6_name) }}" required>
                    @error('segment_6_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_6_link">Segment_6 Link</label>
                    <input type="url" name="segment_6_link" class="form-control" id="segment_6_link" value="{{ old('segment_6_link', $segment->segment_6_link) }}" required>
                    @error('segment_6_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Segment 7 Name and Link -->
            <div class="row">
                <div class="form-group col-md-6 col-12">
                    <label for="segment_7_name">Segment_7 Name</label>
                    <input type="text" name="segment_7_name" class="form-control" id="segment_7_name" value="{{ old('segment_7_name', $segment->segment_7_name) }}" required>
                    @error('segment_7_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                    <label for="segment_7_link">Segment_7 Link</label>
                    <input type="url" name="segment_7_link" class="form-control" id="segment_7_link" value="{{ old('segment_7_link', $segment->segment_7_link) }}" required>
                    @error('segment_7_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Segment</button>
        </form>
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
