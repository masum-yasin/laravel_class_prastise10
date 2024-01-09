<?php

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
    return view('contact');
});
// Route::get('/', function () {
//     return view('admin.example', ['name' => 'Finn']);
// });
Route::get('test',function (Request $request){
    // $request->session()->put('age', '30');
    session(['name' => 'Larael World Wid Php Framwork']);
});
Route::get('/all',function(Request $request){
//   return $request->session()->all();
});
