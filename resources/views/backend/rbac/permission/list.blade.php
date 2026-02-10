@extends('backend.layouts.app')

@section('title', 'Permission List')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">Permissions List</div>
                @can('permission.create')
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('permissions.create')}}" class="btn btn-primary">Create Permission</a>
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
                                    <th>Permission Name</th>
                                    <th>Group</th>
                                    <th>Created At</th>
                                    @canany(['permissions.delete','permissions.edit'])
                                        <th width="15%" class="text-center">Action</th>
                                    @endcanany
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $index => $permission)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->group?->name ?? 'No Group' }}</td>
                                        <td>{{ $permission->created_at->format('d, M Y') }}</td>
                                        @canany(['permissions.delete','permissions.edit'])
                                        <td class="text-center">
                                            @can('permissions.edit')
                                                <a href="{{ route('permissions.edit', $permission->id) }}"
                                                class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>
                                            @endcan
                                            @can('permissions.delete')
                                            <form action="{{ route('permissions.destroy', $permission->id) }}"
                                                method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure want to delete {{$permission->name}} ?')">
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
