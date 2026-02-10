@extends('layouts.guest')

@section('title', 'Verify Email')

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

                                    <h4 class="mt-4 font-weight-bold">Must verify?</h4>
                                    <div class="mb-4 text-sm text-gray-600">
                                        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                                    </div>

                                    @if (session('status') == 'verification-link-sent')
                                        <div class="mb-4 text-sm bg-warning p-2">
                                            A new verification link has been sent to the email address you provided during registration.
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <div class="w-100 my-2">
                                            <button type="submit" class="btn btn-success w-100">
                                                Resend Verification Email
                                            </button>
                                        </div>
                                    </form>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <div class="w-100 my-2">
                                            <button type="submit" class="btn btn-danger w-100">
                                                Log Out
                                            </button>
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
