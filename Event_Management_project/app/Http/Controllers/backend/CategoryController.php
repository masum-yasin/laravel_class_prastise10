<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories']=Category::all();
        return view('backend.category.index',$data);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =['name'=>$request->name];
        // print_r($data);
        if(Category::insert($data)){
            return redirect('category')->with('msg','Category Insert Successfully');
        }
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
    public function edit(string $id)
    {
     $category = Category::find($id);
     $data['single']=$category;
     return view('backend.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $category = Category::find($id);
    $validate = $request->validate(
        ['name'=>'required|min:4'],
    );
    if($validate){
        $data = [
            'name'=>$request->name
        ];
        $category->update($data);
        return redirect('category')->with('msg','Category update successfully');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category =Category::find($id);
        if($category->delete()){
            return redirect('category')->with('msg','Delete successfully');
        }
    }
}
