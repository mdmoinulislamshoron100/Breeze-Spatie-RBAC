@extends('layouts.guest')

@section('title', 'Confirm Password')

@section('auth-content')
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">

                                    <div class="mb-4 text-sm text-gray-600">
                                        This is a secure area of the application. Please confirm your password before continuing.
                                    </div>
                                    <div class="form-body">
                                        <form method="POST" action="{{ route('password.confirm') }}" class="row g-2">
                                            @csrf

                                            <div class="col-12">
                                                <label class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                        placeholder="Enter password" autocomplete="current-password">
                                                    <span class="input-group-text bg-transparent toggle-password">
                                                        <i class="bx bx-hide"></i>
                                                    </span>
                                                </div>
                                                @error('password')
                                                    <div class="text-danger small">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Confirm</button>
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