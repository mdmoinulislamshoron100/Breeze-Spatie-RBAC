<?php

namespace App\Http\Controllers\rbac;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Permission;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoleController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:role.list', only: ['index']),
            new Middleware('permission:role.create', only: ['create']),
            new Middleware('permission:role.store', only: ['store']),
            new Middleware('permission:role.edit', only: ['edit']),
            new Middleware('permission:role.update', only: ['update']),
            new Middleware('permission:role.delete', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->get();
        return view('backend.rbac.role.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::with('group')->get()
                    ->sortBy(function($permission){
                        return $permission->group->name;
                    })
                    ->groupBy(function($permission){
                        return $permission->group->name;
                    });

        return view('backend.rbac.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'name' => trim(strtolower($request->name)),
        ]);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name'],
            'permissions' => ['nullable','array'],
            'permissions.*' => ['exists:permissions,id'],
        ]);

        $role = Role::create([
            'name' => $validated['name'],
            'guard_name' => 'web',
        ]);

        if(!empty($validated['permissions'])){
            $permissions = Permission::whereIn('id', $validated['permissions'])->get();

            $role->syncPermissions($permissions);
        }
        return redirect()->route('roles.index')->with('success', 'Role created with permissions successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::with('group')->get()
                    ->sortBy(function($permission){
                        return $permission->group->name;
                    })
                    ->groupBy(function($permission){
                        return $permission->group->name;
                    });
    
        $hasPermessions = $role->permissions->pluck('name')->toArray();
        return view('backend.rbac.role.edit',compact(['permissions','role','hasPermessions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role, Request $request)
    {
        $request->merge([
            'name' => trim(strtolower($request->name)),
        ]);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name,' . $role->id],
            'permissions' => ['nullable','array'],
            'permissions.*' => ['exists:permissions,id'],
        ],
        [
            'permissions.min' => 'Please select at least one permission.',
        ]);

        $role->update([
            'name' => $validated['name'],
        ]);

        if(!empty($validated['permissions'])){
            $permissions = Permission::whereIn('id', $validated['permissions'])->get();
        }

            $role->syncPermissions($permissions ?? []);

        return redirect()->route('roles.index')->with('success', 'Role updated with permissions successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted with permissions successfully.');
    }
}
