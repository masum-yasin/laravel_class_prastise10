<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
   public function index(){
    abort(404);
//    return view('contact');
   }
}
