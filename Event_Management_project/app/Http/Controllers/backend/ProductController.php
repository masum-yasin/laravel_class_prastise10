<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['products'] =product::all();
        return view('backend.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories']=Category::All();
        return view('backend.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $data = [
        'name'=>$request->name,
        'description'=>$request->desc,
        'price'=>$request->price,
        'category_id'=>$request->category,
     ];
     if(product::insert($data)){
        return redirect('product')->with('msg','Product Upload Successfully');
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
        $product = product::find($id);
        $data['product']=$product;
        return view('backend.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        $validate = $request->validate(
            [
                'name'=>'required|min:5',
              
               
            ]);
            if($validate){
            $data = [
                'name'=>$request->name,
                                               
                'price'=>$request->price,
                
                
            ];
        $product->update($data);
        return redirect('product')->with('msg','Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);
        if($product->delete()){
            return redirect('product')->with('msg','Delete Successfully');
        }
    }
}
