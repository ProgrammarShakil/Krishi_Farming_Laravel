@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Contact Details')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="text-primary">Message of {{$contact->name}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <strong>Name:</strong> {{ $contact->name }}
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong> {{ $contact->email }}
                            </div>
                            <div class="mb-3">
                                <strong>Phone:</strong> {{ $contact->phone_number }}
                            </div>
                            <div class="mb-3">
                                <strong>Subject:</strong> {{ $contact->subject }}
                            </div>
                            <div class="mb-3">
                                <strong>Message:</strong> <br>
                                {{ nl2br(e($contact->message)) }} <!-- This converts new lines to <br> -->
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
