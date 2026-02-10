<?php

namespace App\Http\Controllers\rbac;

use App\Http\Controllers\Controller;
use App\Models\PermissionGroup;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PermissionGroupController extends Controller implements HasMiddleware
{


    public static function middleware(): array
    {
        return [
            new Middleware('permission:permission category.list', only: ['index']),
            new Middleware('permission:permission category.create', only: ['create']),
            new Middleware('permission:permission category.store', only: ['store']),
            new Middleware('permission:permission category.edit', only: ['edit']),
            new Middleware('permission:permission category.update', only: ['update']),
            new Middleware('permission:permission category.delete', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupNames = PermissionGroup::latest()->get();
        return view('backend.rbac.permission-group.list', compact('groupNames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.rbac.permission-group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [ 'required', 'string', 'max:255', 'unique:permission_groups,name' ],
        ]);

        PermissionGroup::create([
            'name' => $validated['name'],
        ]);

        return redirect()->route('permission-group.index')->with('success', 'Permission group created successfully');
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
    public function edit(PermissionGroup $permissionGroup)
    {
        return view('backend.rbac.permission-group.edit', compact('permissionGroup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionGroup $permissionGroup, Request $request)
    {
        $validated = $request->validate(['name' => ['required','string','max:255','unique:permission_groups,name,' . $permissionGroup->id,]]);

        $permissionGroup->update([
            'name' => $validated['name'],
        ]);

        return redirect()->route('permission-group.index')->with('success', 'Permission group updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PermissionGroup $permissionGroup)
    {
        $permissionGroup->delete();
        return redirect()->route('permission-group.index')->with('success', 'Permission group deleted successfully.');
    }
}
