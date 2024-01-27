<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


    class ClassController extends Controller
{
    //construct//
    public function __construct() {
        $this->middleware('auth');
    }
    //class route method//
    
    public function index(){
        $classes=DB::table('classes')->get();
        return view('admin.class.class', compact('classes'));
        // echo ($classes);
    }
    public function create(){
        return view('admin.class.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:classes',
        ]);
        $data = array(
            'name'=>$request->name,
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success','successfully Inserted');
    }
    public function delete($id){
        DB::table('classes')->where('id',$id)->delete();
        return redirect()->back()->with('success','delete successfully');
    }

}
