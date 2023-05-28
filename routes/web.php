<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'home']);

// Route::prefix('/product')->group(function (){
//     Route::get('/edugames', [ProductController::class, 'edugames']);
//     Route::get('/kidsgames', [ProductController::class, 'kidsgames']);
//     Route::get('/story', [ProductController::class, 'story']);
//     Route::get('/songs', [ProductController::class, 'songs']);
// });

// Route::get('/news/{$id}', [NewsController::class, 'news']);

// Route::prefix('/category')->group(function(){
//     Route::get('/karir', [CategoryController::class, 'karir']);
//     Route::get('/magang', [CategoryController::class, 'magang']);
//     Route::get('/kunjungan', [CategoryController::class, 'kunjungan']);
// });

// Route::get('/about', function(){
//     return redirect('https://www.educastudio.com/about-us');
// });

// Route::resource('/contact', ContactController::class)->only(['index']);

Route::get('/', function() {
    return view('home');
});

// Auth::routes();

// Route::get('/home', function(){return view('home');})->name('home');
// Route::get('/about',function(){return view('about-us');})->name('about');
// Route::get('/news',function(){return view('news');})->name('news');
// Route::get('/product',function() {
//     return view('product', [
//         'products' => Product::all()
//     ]);
// })->name('product');
// Route::get('/program',function(){return view('program');})->name('program');
// Route::get('/contact',function(){return view('contact-us');})->name('contact-us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
