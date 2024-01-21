<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::all();
        //dd($products);
        return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats'] = Category::All();
        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|min:4',
            'description'=>'required|min:6',
            'price'=>'required|numeric',
            'category'=>'required',
            'photo'=>'mimes:jpg,jpeg,png',

        ]);
    //    echo  $request->image->storeAs('public/images');
        // dd($request->photo);

        $filename = time(). "." . $request->photo->extension();

      
        if($validate){
            $data = [ 
                'name'=>  $request->name,
                'description'=>  $request->description,
                'price'=>  $request->price,
                'availibility'=>  $request->availibility,
                'category_id'=>  $request->category, 
                'tags'=>  $request->tags, 
                'image'=>$filename,


            ];
        }

      

        $model = new Product();       
         if($model->create($data)){
            $request->photo->move('uploads', $filename);
              return redirect('product')->with('msg', 'Successfully Product Added');
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
        $cats = Category::get();
        $products = Product::find($id);
        // $data['products']=$product;
        return view('backend.product.edit',compact('products','cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $validate = $request->validate([
            'name'=>'required|min:4',
            'description'=>'required|min:6',
            'price'=>'required|numeric',
            'category'=>'required',
            'photo'=>'mimes:jpg,jpeg,png',

        ]);
        $filename = time(). "." . $request->photo->extension();
        if($validate){
            $data =[
                'name'=>  $request->name,
                'description'=>  $request->description,
                'price'=>  $request->price,
                'availibility'=>  $request->availibility,
                'category_id'=>  $request->category, 
                'tags'=>  $request->tags, 
                'image'=>$filename,

            ];
            $product->update($data);
            $request->photo->move('uploads', $filename);                                                                                       
            return redirect('product')->with('msg','update Successfylly');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product->delete()){
        return redirect('product')->with('msg','Delete Successfully');
        }
    }
}
