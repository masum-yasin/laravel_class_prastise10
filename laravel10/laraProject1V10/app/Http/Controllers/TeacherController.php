<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function login(){
        return view('teacher.login');
    }
    public function store(Request $request){
            $tuser = $request->all();
            // dd($tuser);
            if(Auth::guard('teacher')->attempt(['email'=>$tuser['email'] ,'password'=>$tuser['password']])){
                return redirect()->route('teacher.dashboard');
            }
            else{
                return view('Teacher.login');
            }
    }
    public function dashboard(){
        return view('teacher.dashboard');
    }
}
