<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/','App\Http\Controllers\HomeController@index')->name('welcom');
Route::get('products','App\Http\Controllers\ProductController@list')->name('product.list');
Route::get('cart','App\Http\Controllers\ProductController@cart')->name('cart');

 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);
// Route::resource('product',ProductController::class);

Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::get('/product/show/{id}',[ProductController::class,'show'])->name('product.show');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

Route::post('/product/store',[ProductController::class,'store'])->name('product.store');


  
  
