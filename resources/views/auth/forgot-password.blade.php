@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('auth-content')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 rounded border">

                                    <div class="text-center mb-4">
                                        <img src="{{ asset('backend/assets/images/icons/forgot-2.png') }}" width="120" alt="">
                                    </div>

                                    <h4 class="mt-4 font-weight-bold">Forgot Password?</h4>
                                    <p class="text-muted mb-4">
                                        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.
                                    </p>

                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="mb-4">
                                            <label class="form-label">Email address</label>
                                            <input
                                                type="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="example@user.com"
                                                autofocus
                                            >
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">
                                                Send Password Reset Link
                                            </button>

                                            <a href="{{ route('login') }}" class="btn btn-light">
                                                <i class="bx bx-arrow-back me-1"></i> Back to Login
                                            </a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
