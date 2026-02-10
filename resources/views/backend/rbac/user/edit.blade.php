@extends('backend.layouts.app')

@section('title', 'User Edit')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">User Edit</div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('users.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>

            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">

                        <form action="{{route('users.update', $user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Name : </label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $user->name) }}" placeholder="Enter user name" autocomplete="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email : </label>
                                <div class="col-sm-9">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}" placeholder="Enter user email" autocomplete="username">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password : </label>
                                <div class="col-sm-9">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        value="{{ old('password') }}" placeholder="Enter new password" autocomplete="new-password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mb-2">
                                    @error('user_roles')
                                        <div class="text-danger fw-semibold">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-sm-3 col-form-label">Manage User Roles :</label>

                                <div class="col-sm-9">
                                    <div class="row">
                                        @foreach ($roles as $role)
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check">
                                                    <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                        name="user_roles[]"
                                                        id="role-{{ $role->id }}"
                                                        value="{{ $role->id }}"
                                                        {{ isset($user) && $user->roles->contains($role->id) ? 'checked' : '' }}
                                                    >

                                                    <label class="form-check-label" for="role-{{ $role->id }}">
                                                        {{ $role->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
