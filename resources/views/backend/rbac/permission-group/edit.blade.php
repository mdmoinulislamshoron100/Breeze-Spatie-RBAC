@extends('backend.layouts.app')

@section('title', 'Permission Group Edit')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">Permission Group Edit</div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('permission-group.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>

            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">

                        <form action="{{route('permission-group.update', $permissionGroup->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Permission Group Name : </label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $permissionGroup->name) }}" placeholder="Enter permission Group name" autocomplete="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
