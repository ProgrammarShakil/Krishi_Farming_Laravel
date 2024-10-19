@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Footer')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Footer</h1>

        <!-- Footer Edit Form -->
        <form action="{{ route('admin.footers.update', $footer->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row">
                <!-- Footer Title 1 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="footer_title_1">Footer Title 1</label>
                        <input type="text" name="footer_title_1" class="form-control" id="footer_title_1" value="{{ old('footer_title_1', $footer->footer_title_1) }}" required>
                        @error('footer_title_1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Footer Title 2 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="footer_title_2">Footer Title 2</label>
                        <input type="text" name="footer_title_2" class="form-control" id="footer_title_2" value="{{ old('footer_title_2', $footer->footer_title_2) }}" required>
                        @error('footer_title_2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Footer Title 3 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="footer_title_3">Footer Title 3</label>
                        <input type="text" name="footer_title_3" class="form-control" id="footer_title_3" value="{{ old('footer_title_3', $footer->footer_title_3) }}" required>
                        @error('footer_title_3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Footer Title 1 Links and Texts -->
                <div class="col-md-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-group">
                            <label for="footer_title_1_text_{{ $i }}">Footer Title 1 Text {{ $i }}</label>
                            <input type="text" name="footer_title_1_text_{{ $i }}" class="form-control" id="footer_title_1_text_{{ $i }}" value="{{ old('footer_title_1_text_' . $i, $footer->{'footer_title_1_text_' . $i}) }}" required>
                            @error('footer_title_1_text_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="footer_title_1_link_{{ $i }}">Footer Title 1 Link {{ $i }}</label>
                            <input type="text" name="footer_title_1_link_{{ $i }}" class="form-control" id="footer_title_1_link_{{ $i }}" value="{{ old('footer_title_1_link_' . $i, $footer->{'footer_title_1_link_' . $i}) }}" required>
                            @error('footer_title_1_link_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endfor
                </div>

                <!-- Footer Title 2 Links and Texts -->
                <div class="col-md-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-group">
                            <label for="footer_title_2_text_{{ $i }}">Footer Title 2 Text {{ $i }}</label>
                            <input type="text" name="footer_title_2_text_{{ $i }}" class="form-control" id="footer_title_2_text_{{ $i }}" value="{{ old('footer_title_2_text_' . $i, $footer->{'footer_title_2_text_' . $i}) }}" required>
                            @error('footer_title_2_text_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="footer_title_2_link_{{ $i }}">Footer Title 2 Link {{ $i }}</label>
                            <input type="text" name="footer_title_2_link_{{ $i }}" class="form-control" id="footer_title_2_link_{{ $i }}" value="{{ old('footer_title_2_link_' . $i, $footer->{'footer_title_2_link_' . $i}) }}" required>
                            @error('footer_title_2_link_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endfor
                </div>

                <!-- Footer Title 3 Links and Texts -->
                <div class="col-md-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-group">
                            <label for="footer_title_3_text_{{ $i }}">Footer Title 3 Text {{ $i }}</label>
                            <input type="text" name="footer_title_3_text_{{ $i }}" class="form-control" id="footer_title_3_text_{{ $i }}" value="{{ old('footer_title_3_text_' . $i, $footer->{'footer_title_3_text_' . $i}) }}" required>
                            @error('footer_title_3_text_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="footer_title_3_link_{{ $i }}">Footer Title 3 Link {{ $i }}</label>
                            <input type="text" name="footer_title_3_link_{{ $i }}" class="form-control" id="footer_title_3_link_{{ $i }}" value="{{ old('footer_title_3_link_' . $i, $footer->{'footer_title_3_link_' . $i}) }}" required>
                            @error('footer_title_3_link_{{ $i }}')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Footer</button>
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
