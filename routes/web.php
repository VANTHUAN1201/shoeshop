<?php

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

// Route::get('/home', function () {
//     return view('welcome');
// // });
// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('detail-product');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/bill', function () {
    return view('bill');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin.template.main-layout-admin');
});

Route::get('/admin/product', function () {
    return view('admin.product-admin');
});
Route::get('/admin/category', function () {
    return view('admin.category-admin');
});
Route::get('/admin/product/add', function () {
    return view('admin.add-product');
});