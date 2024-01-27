<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $students = DB::table('students')->orderBy('roll','ASC')->get();
    return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
    return view('admin.student.create',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required',
        'phone'=>'required',
        'roll'=>'required',
        'email'=>'required',
       ]);
       $data = array(
        'class_id'=>$request->class,
        'name'=>$request->name,
        'phone'=>$request->phone,
        'roll'=>$request->roll,
        'email'=>$request->email,
       );
       DB::table('students')->insert($data);
       return redirect()->back()->with('success','Student Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id',$id)->first();
        // return response()->json($student);
        return view('admin.student.view',compact('student','classes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id',$id)->first();
        return view('admin.student.edit',compact('classes','student'));
      

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class'=> 'required',
            'name'=> 'required',
            'phone'=> 'required',
            'roll'=> 'required',
            'email'=> 'required',
        ]);
        // dd($request->all());
        $data = array(
            'class_id'=>$request->class,
            'name'=>$request->name,
            'roll'=>$request->roll,
            'email'=>$request->email,
            'phone'=>$request->phone,
        );
        DB::table('students')->where('id',$id)->update($data);
        return redirect()->route('students.index')->with('success','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect()->back()->with('success','Student Delete Successfully');
    }
}
