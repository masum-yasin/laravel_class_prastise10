<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->latest()->get();
        return view('backend.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('backend.users.show', compact('user'));
    }

    public function changeRole(User $user)
    {

        $this->authorize('update-role');

        $roles = Role::pluck('name', 'id')->toArray();
        return view('backend.users.change_role', compact('roles', 'user'));
    }

    public function updateRole(Request $request, User $user)
    {
        $user->update([
            'role_id' => $request->role_id
        ]);

        return redirect()
            ->route('users.index')
            ->withMessage('Successfully updated role!');
    }
}
