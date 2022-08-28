<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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
    return view('home');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});


Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);
Route::get('/login_admin', [HomeController::class, 'showlogin_admin']);

Route::get('/produk', [produkController::class, 'index']);
Route::get('/produk/create', [produkController::class, 'create']);
Route::post('/produk', [produkController::class, 'store']);
Route::get('/produk/{produk}', [produkController::class, 'show']);
Route::get('/produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('/produk/{produk}', [produkController::class, 'update']);
Route::delete('/produk/{produk}', [produkController::class, 'destroy']);

Route::get('/Promo', function () {
    return view('admin.section.Promo');
});

Route::get('/pelanggan', function () {
    return view('admin.section.pelanggan');
});

Route::get('/supplier', function () {
    return view('admin.section.supplier');
});
 
