@extends('backend.layouts.app')

@section('title', 'Users List')

@section('main-content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title">Users List</div>
                @can('user.create')
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
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
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('d, M Y') }}</td>
                                        @canany(['user.edit','user.delete'])
                                        <td class="text-center">
                                            @can('user.edit')
                                            <a href="{{ route('users.edit', $user->id) }}"
                                            class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            @endcan
                                            @can('user.delete')
                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure want to delete {{$user->name}} ?')">
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
