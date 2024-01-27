<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request, Course $course)

    {
        $exists =Cart::where('course_id', $course['id'])->exists();
        // dd();
        if($exists){
            return redirect()->back()->withMessage('You already add to cart this course');
        }else{
            $course->cart()->create([
                'user_id' => Auth::id(),
                'qty' => 1
            ]);
            return redirect()->back();
        }



    }

}
