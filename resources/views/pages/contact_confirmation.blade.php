@extends('components.header')

@section('title', 'Contact Confirmation')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Your Submitted Info</h4>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $name }}</p>
                    <p><strong>Email:</strong> {{ $email }}</p>
                    <p><strong>Phone:</strong> {{ $phone }}</p>
                    <p><strong>Message:</strong></p>
                    <div class="border rounded p-3 bg-light">
                        {{ $message }}
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('contact') }}" class="btn btn-secondary">Submit Another Response</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
