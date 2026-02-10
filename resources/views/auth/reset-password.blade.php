@extends('layouts.guest')

@section('title', 'Reset Password')

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
                                        <h4>Enter a New Password for Your Account</h4>
                                    </div>

                                    <div class="form-body">
                                        <form method="POST" action="{{ route('password.store') }}" class="row g-2">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email',$request->email) }}" placeholder="Enter your email"
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
                                                        <i class="bx bx-key"></i> Reset Password
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