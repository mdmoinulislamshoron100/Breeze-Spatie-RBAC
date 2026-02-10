<?php

namespace App\Http\Controllers\rbac;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:user.list', only: ['index']),
            new Middleware('permission:user.create', only: ['create']),
            new Middleware('permission:user.store', only: ['store']),
            new Middleware('permission:user.edit', only: ['edit']),
            new Middleware('permission:user.update', only: ['update']),
            new Middleware('permission:user.delete', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('backend.rbac.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::latest()->get();
        return view('backend.rbac.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'name' => trim($request->name),
            'email' => trim(strtolower($request->email)),
        ]);

        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255', 'unique:users,email'],
            'password'     => ['required', 'min:8'],
            'user_roles'   => ['nullable', 'array'],
            'user_roles.*' => ['exists:roles,id'],
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => $validated['password'],
        ]);

        if(!empty($validated['user_roles'])){
            $roles = Role::whereIn('id', $validated['user_roles'])->get();

            $user->syncRoles($roles);
        }

        return redirect()->route('users.index')->with('success', 'User created with roles successfully.');
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
    public function edit(User $user)
    {
        $roles = Role::latest()->get();
        return view('backend.rbac.user.edit',compact(['roles', 'user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, Request $request)
    {
        $request->merge([
            'name' => trim($request->name),
            'email' => trim(strtolower($request->email)),
        ]);

        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password'     => ['nullable', 'min:8'],
            'user_roles'   => ['nullable', 'array'],
            'user_roles.*' => ['exists:roles,id'],
        ]);

        $user->update([
            'name'  => $validated['name'],
            'email' => $validated['email'],
        ]);

        if (!empty($validated['password'])) {
            $user->update([
                'password' => $validated['password']
            ]);
        }

        $user->roles()->detach();

        if(!empty($validated['user_roles'])){
            $roles = Role::whereIn('id', $validated['user_roles'])->get();

            $user->syncRoles($roles);
        }

        return redirect()->route('users.index')->with('success', 'User updated  with roles successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted with roles successfully.');
    }
}
