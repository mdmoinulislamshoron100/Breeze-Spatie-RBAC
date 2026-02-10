
@extends('backend.layouts.app')

@section('title', 'Profile Edit')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="py-3">
                <div class="container">

                    <x-alert/>

                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-sm border-danger">
                                <div class="card-body">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
