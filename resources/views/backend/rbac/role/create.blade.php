@extends('backend.layouts.app')

@section('title', 'Roles Create')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">New Role Create</div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('roles.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>

            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body">
                    <div class="border p-4 rounded">

                        <form action="{{route('roles.store')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">User Role Name : </label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="Enter role name" autocomplete="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <span>Permissions :</span>    
                            </div>
                            <div class="mb-2">
                                @error('permissions')
                                    <div class="text-danger fw-semibold">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row align-items-center mb-3 border p-2 rounded">
                                <div class="col-md-3 d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input me-2" id="checkPermissionAll">
                                    <label class="form-check-label fw-bold" for="checkPermissionAll">
                                        <strong>All</strong>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="container">
                                    @foreach ($permissions as $groupName => $groupPermissions)
                                        <div class="row align-items-start mb-3 border p-2 rounded permission-group">

                                        <div class="col-md-3 d-flex align-items-center">
                                            <input type="checkbox"
                                                class="form-check-input me-2 group-checkbox"
                                                id="group-{{ Str::slug($groupName) }}"
                                                data-group="{{ Str::slug($groupName) }}">

                                            <label class="form-check-label fw-bold" for="group-{{ Str::slug($groupName) }}">
                                                {{ $groupName }}
                                            </label>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="row permission-items permission-items-{{ Str::slug($groupName) }}">
                                                @foreach ($groupPermissions as $permission)
                                                    <div class="col-md-4 d-flex align-items-center mb-1">
                                                        <input type="checkbox"
                                                            class="form-check-input me-2 permission-checkbox"
                                                            name="permissions[]"
                                                            value="{{ $permission->id }}"
                                                            data-group="{{ Str::slug($groupName) }}"
                                                            id="permission-{{ $permission->id }}"
                                                            {{ in_array($permission->id, old('permissions', [])) ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="permission-{{ $permission->id }}">
                                                            {{ $permission->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script>

        function implementCheckPermissionAll(){
            const checkedAllCount = $('input[name="permissions[]"]').length;
            const checkedAnyCount = $('input[name="permissions[]"]:checked').length
            if(checkedAllCount === checkedAnyCount){
                $('#checkPermissionAll').prop('checked', true);
            }else{
                $('#checkPermissionAll').prop('checked', false);
            }
        }

        $(document).ready(function(){

            $('#checkPermissionAll').on('change', function(){
                const isChecked = $(this).is(':checked');
                $('input[type="checkbox"]').prop('checked', isChecked);
                
            });

            $('input[name="permissions[]"]').on('change', function(){
                implementCheckPermissionAll();
            });

            $('.group-checkbox').on('change', function () {
                const groupKey = $(this).data('group');
                const isChecked = $(this).is(':checked');

                $('.permission-checkbox[data-group="' + groupKey + '"]').prop('checked', isChecked);
                implementCheckPermissionAll();
            });

            $('.permission-checkbox').on('change', function () {
                const groupKey = $(this).data('group');
                const permissions = $('.permission-checkbox[data-group="' + groupKey + '"]');
                const checked     = permissions.filter(':checked');

                $('#group-' + groupKey).prop('checked',permissions.length === checked.length);
                implementCheckPermissionAll();
            });

        });
    </script>
@endpush    