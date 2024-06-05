<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('website.home');
})->name('/');

// user authentication
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('register-user',[AuthController::class,'register_user'])->name('register_user');
Route::post('login-user',[AuthController::class,'login_user'])->name('login_user');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::post('/edit-users/{id}', [AuthController::class,'edit_users'])->name('edit_users');
Route::post('/delete-user/{id}', [AuthController::class, 'delete_user'])->name('delete_user');


Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/users', [AdminController::class,'users'])->name('users');
Route::get('/product', [AdminController::class,'product'])->name('product');
Route::post('/store-product', [AdminController::class,'store_product'])->name('store_product');
Route::get('/view-products', [AdminController::class,'view_products'])->name('viewproducts');
Route::post('/edit-products/{id}', [AdminController::class,'edit_products'])->name('edit_products');
Route::post('/delete-product/{id}', [AdminController::class,'delete_product'])->name('delete_product');
Route::get('/get-mens-products', [AdminController::class,'get_mens_products'])->name('get_mens_products');
Route::get('/get_kids_products', [AdminController::class,'get_kids_products'])->name('get_kids_products');
Route::get('get_womens_products', [AdminController::class, 'get_womens_products'])->name('get_womens_products');
Route::get('/show_single_product/{id}', [AdminController::class, 'show_single_product'])->name('show_single_product');
Route::get('/add_to_cart', [AdminController::class,'add_to_cart'])->name('add_to_cart');