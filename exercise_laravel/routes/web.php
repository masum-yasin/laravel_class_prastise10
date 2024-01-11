<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('contact',[ContactController::class,'index'])->name('contact.us');

Route::get('test',function (Request $request){
    // $request->session()->put('age', '30');
    session(['name' => 'Larael World Wid Php Framwork']);
});

//  Route::get('contact/create',[ContactController::class,'create'])->name('contact.create');