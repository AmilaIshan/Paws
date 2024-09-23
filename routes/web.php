<?php

use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Product_Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [Product_Controller::class, 'add']);
Route::post('/product',[Product_Controller::class, 'store'])->name('addproduct');
Route::get('/products',[Product_Controller::class, 'list'])->name('list');
// Route::get('/products/{id}', [Product_Controller::class, 'show'])->name('single');
Route::get('/products/{id}', [Product_Controller::class, 'show'])->name('products.show');
Route::put('/products/{id}', [Product_Controller::class, 'update'])->name('products.update');
// Route::get('/products', [Product_Controller::class, 'list'])->name('products');
Route::post('/add_User', [Admin_Controller::class, 'store'])->name('createAdmin');
Route::get('/add', function(){
    return view('add_User');
})->name('add');
// Route::get('/addUser', [Admin_Controller::class, 'show']);
Route::get('/adminList', [Admin_Controller::class, 'list'])->name('adminList');
Route::get('/addUser/{id}',[Admin_Controller::class, 'show'])->name('admin.show');
Route::put('/addUser/{id}',[Admin_Controller::class, 'update'])->name('admin.update');
require __DIR__.'/auth.php';
