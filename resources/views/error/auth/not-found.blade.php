@extends('layouts.guest')

@section('title', '404 Not Found')

@section('auth-content')
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">

                    <img src="{{ asset('backend/assets/images/errors/404.jpg') }}"
                         class="img-fluid mb-4"
                         alt="404"
                         style="max-height: 260px;">

                    <h1 class="display-4 fw-bold">404</h1>

                    <h4 class="mb-3">Page Not Found</h4>

                    <p class="text-muted mb-4">
                        Sorry, the page you are looking for doesn’t exist or has been moved.
                    </p>

                    <a href="{{ route('dashboard') }}" class="btn btn-primary px-4">
                        <i class="bx bx-home"></i> Back to Home
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
