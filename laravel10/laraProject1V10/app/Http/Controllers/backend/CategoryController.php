<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class CategoryController extends Controller
{
    
    public function index()
    {
        $data['cats']= Category::All();
        return view('backend.category.index',$data);
        
    }

    
    public function create()
    {
        // echo 'hellow';
        return view('backend.category.create');
    }
    
    public function store(Request $request)
    {
        $data =[ 'name'=>$request->name];
    //     // print_r($data);
       if( Category::insert($data)){
        return redirect('category')->with('msg','Successfully Category Added');
       }
    // DB::table('categories')->insert($data);
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $category = Category::find($id);
        $data['single']=$category;
        return view('backend.category.edit',$data);
    }

    
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $validate =$request->validate(
            [
                'name'=>'required|min:4'
            ]
            );
            if($validate){
                $data =[
                    'name'=>$request->name
                ];
                $category->update($data);
                return redirect('category')->with('msg','Update Successfully');
            }
    }

    
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if($category->delete()){
            return redirect('category')->with('msg','delete Successfully');
        }

    }
}
