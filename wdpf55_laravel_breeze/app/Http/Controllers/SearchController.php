<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function Search(Request $request){
        $categories = Category::get();

        if($request->filled('search')){
         $products= Product::search($request->search)->where('category_id', $request->cat)->get();// product serarch with category//

         
        //  $products= Product::search($request->search)->get(); //product search all product
         
        }else{
            $products = Product::get();
        }

      
 
    return view('search',compact('products','categories'));
    }

}
