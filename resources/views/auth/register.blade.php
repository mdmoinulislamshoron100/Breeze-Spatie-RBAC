@extends('layouts.guest')

@section('title', 'Register')

@section('auth-content')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">

                                    <div class="text-center mb-4">
                                        <h3>Sign Up</h3>
                                        <p>
                                            Already have an account?
                                            <a href="{{ route('login') }}">Sign in here</a>
                                        </p>
                                    </div>

                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="{{ route('social.redirect','google') }}"> <span
                                                class="d-flex justify-content-center align-items-center">
                                                <img class="me-2"
                                                    src="{{ asset('backend/assets/images/icons/search.svg') }}" width="16"
                                                    alt="Image Description">
                                                <span>Sign Up with Google</span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                        <hr>
                                    </div>

                                    <div class="form-body">
                                        <form method="POST" action="{{ route('register') }}" class="row g-3">
                                            @csrf

                                            <!-- Name -->
                                            <div class="col-12">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}" placeholder="Enter your name" autocomplete="name">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Email -->
                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" placeholder="Enter your email"
                                                    autocomplete="username">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="col-12">
                                                <label class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                        placeholder="Enter password" autocomplete="new-password">
                                                    <span class="input-group-text bg-transparent toggle-password">
                                                        <i class="bx bx-hide"></i>
                                                    </span>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="col-12">
                                                <label class="form-label">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control border-end-0" placeholder="Confirm password"
                                                        autocomplete="new-password">
                                                    <span class="input-group-text bg-transparent toggle-password">
                                                        <i class="bx bx-hide"></i>
                                                    </span>
                                                </div>
                                                @error('password_confirmation')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Submit -->
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bx bx-user"></i> Create Account
                                                    </button>
                                                </div>
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
    </div>
@endsection