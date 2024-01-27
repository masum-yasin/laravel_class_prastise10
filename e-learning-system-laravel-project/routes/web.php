<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TopicController;
use App\Http\Controllers\Backend\LessonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__ . '/auth.php';

Route::get('/', [WelcomeController::class,'homepage'])->name('homepage');
Route::get('/caterories/{category}/courses', [WelcomeController::class, 'courseList'])->name('frontend.courses');
Route::get('/courses/{courses}', [WelcomeController::class, 'courseDetails'])->name('frontend.courses.show');
Route::get('/my-shopping-cart', [WelcomeController::class, 'shoppingCart'])->name('frontend.cart');
Route::get('remove-cart/{id}', [WelcomeController::class, 'removeCart'])->name('remove.cart');
Route::get('checkout/', [WelcomeController::class, 'checkout'])->name('checkout.cart');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('/courses/{course}/comments', [CommentController::class, 'store'])->name('courses.comments.store');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    //courses
    Route::get('course/pdf', [CourseController::class, 'downloadPdf'])->name('course.pdf');
    Route::resource('courses', CourseController::class);
    //topics
    Route::resource('topics', TopicController::class);
    //lessons
    Route::resource('lessons', LessonController::class);



    //carousel
    Route::get('carousels/pdf', [CarouselController::class, 'downloadPdf'])->name('carousels.pdf');
    Route::get('carousels-trash', [CarouselController::class, 'trash'])->name('carousels.trash');
    Route::patch('carousels-trash/{id}', [CarouselController::class, 'restore'])->name('carousels.restore');
    Route::delete('carousels-trash/{id}', [CarouselController::class, 'delete'])->name('carousels.delete');
    Route::resource('carousels', CarouselController::class);
    //category
    Route::resource('categories', CategoryController::class);

    /* profile details route */
    Route::get('/profile/detail', [ProfileController::class, 'profileDetails'])->name('profile.detail');
    Route::get('/profile/edit', [ProfileController::class, 'profileEdit'])->name('profile.edit');
    /* user */
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/{user}/change-role', [UserController::class, 'changeRole'])->name('users.change_role');
    Route::patch('/user/{user}/change-role', [UserController::class, 'updateRole'])->name('users.update_role');

    Route::post('courses/{course}/cart', [CartController::class, 'store'])->name('courses.cart.store');
});
Route::fallback(function () {
    echo "Apnar Url Thik nai";
});



