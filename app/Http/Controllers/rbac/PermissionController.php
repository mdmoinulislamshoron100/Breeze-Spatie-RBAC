<?php

namespace App\Http\Controllers\rbac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\PermissionGroup;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PermissionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:permission.list', only: ['index']),
            new Middleware('permission:permission.create', only: ['create']),
            new Middleware('permission:permission.store', only: ['store']),
            new Middleware('permission:permission.edit', only: ['edit']),
            new Middleware('permission:permission.update', only: ['update']),
            new Middleware('permission:permission.delete', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::with('group')->latest()->get();
        return view('backend.rbac.permission.list', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupNames = PermissionGroup::all();
        return view('backend.rbac.permission.create', compact('groupNames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [ 'required', 'string', 'max:255', 'unique:permissions,name' ],
            'group_id' => ['required', 'exists:permission_groups,id'],
        ],[
            'group_id.required' => 'Permission group is required.',
            'group_id.exists'   => 'Selected permission group is invalid.',
        ]);

        Permission::create([
            'name' => $validated['name'],
            'guard_name' => 'web',
            'group_id' => $validated['group_id']
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $groupNames = PermissionGroup::all();
        return view('backend.rbac.permission.edit', compact('permission','groupNames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255','unique:permissions,name,' . $permission->id],
            'group_id' => ['required','exists:permission_groups,id'],
        ], [
            'group_id.required' => 'Permission group is required.',
            'group_id.exists'   => 'Selected permission group is invalid.',
        ]);

        $permission->update([
            'name' => $validated['name'],
            'group_id' => $validated['group_id'],
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
