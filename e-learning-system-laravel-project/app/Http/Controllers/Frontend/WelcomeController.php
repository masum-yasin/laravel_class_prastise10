<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function homepage()
    {
        if ($keyword = request('keyword')) {
            $courses = Course::latest()
                ->where('title', 'LIKE', "%{$keyword}%")
                ->get();
        } else {
            $courses = Course::latest()->get();
        }

        $carousels = Carousel::latest()->get();

        return view('frontend.homepage', compact('courses', 'carousels'));
    }
    public function courseList(Category $category)
    {
        return view('frontend.courses', compact('category'));
    }

    public function courseDetails($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('frontend.course', compact('course'));
    }
    public function shoppingCart()
    {
        $cartItems = Auth::user()->cartItems;

        return view('frontend.cart', compact('cartItems'));
    }
    public function removeCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->withMessage('Cart remove successfully');
    }
    public function checkout()
    {
        $userId = Auth::user()->id;
        $cartData =Cart::where('user_id', $userId)->get();
        foreach ($cartData as  $value) {
            $order = new Order();
            $order->name = $value->course->title;
            $order->price = $value->course->price;
            $order->course_id = $value->course_id;
            $order->user_id = $value->user_id;
            $order->order_status = "Order Done";
            $order->save();
            $cart_id = $value->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back();
    }
}
