<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileDetails()
    {
        $userInfo = Role::pluck('name', 'id')->toArray();
        return view('backend.Profile.profile_detail', compact('userInfo'));
    }
    public function profileEdit()
    {
        $user = Auth::user();
        // dd($user);
        $userRole = Role::pluck('name', 'id')->toArray();
        return view('backend.Profile.edit', compact('user','userRole'));
    }

}
