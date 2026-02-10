@extends('backend.layouts.app')

@section('title', 'Permission Edit')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">Permission Edit</div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('permissions.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>

            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">

                        <form action="{{route('permissions.update', $permission->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="group" class="col-sm-3 col-form-label">Permission Group : </label>
                                <div class="col-sm-9">
                                    <div class="mb-2">
                                        <select name="group_id"
                                                class="form-select single-select @error('group_id') is-invalid @enderror">
                                            @foreach ($groupNames as $group)
                                                <option value="{{ $group->id }}"
                                                    {{ old('group_id', $permission->group_id) == $group->id ? 'selected' : '' }}>
                                                    {{ $group->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('group_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Permission Group Name : </label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $permission->name) }}" placeholder="Enter permission name" autocomplete="name">
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

@push('style')
	<link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
@endpush

@push('script')
	<script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
@endpush