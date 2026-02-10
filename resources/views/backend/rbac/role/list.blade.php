@extends('backend.layouts.app')

@section('title', 'Roles List')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">Roles List</div>
                @can('role.create')
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('roles.create')}}" class="btn btn-primary">Create Role</a>
                    </div>
                </div>
                @endcan
            </div>

            <x-alert/>
            
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="10%">Serial No.</th>
                                    <th>User Roles</th>
                                    <th>Created At</th>
                                    @canany(['role.edit','role.delete'])
                                        <th width="15%" class="text-center">Action</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $index => $role)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->created_at->format('d, M Y') }}</td>
                                        @canany(['role.edit','role.delete'])
                                        <td class="text-center">
                                            @can('role.edit')
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>
                                            @endcan
                                            @can('role.delete')
                                            <form action="{{ route('roles.destroy', $role->id) }}"
                                                method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure want to delete {{$role->name}} ?')">
                                                    Delete
                                                </button>
                                            </form>
                                            @endcan
                                        </td>
                                        @endcanany
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@push('script')
    <script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  });
	</script>
@endpush
