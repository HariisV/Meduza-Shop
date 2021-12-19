<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesanController;
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

    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class,'login'])->name('login');
    });
    // Gausah Login
    Route::POST('/login-proses',[AuthController::class,'LoginProses'])->name('LoginProses');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
    // Home Ere
    Route::GET('/', [TampilanController::class,'index'])->name('home');
    Route::GET('Produk/{nama}', [TampilanController::class,'detail'])->name('detailProduct');    
    Route::GET('/About', [TampilanController::class,'about'])->name('about');
    Route::GET('/Contact', [TampilanController::class,'contact'])->name('contact');
    Route::POST('/Contact', [TampilanController::class,'tambahPesan'])->name('tambahPesan');
    Route::POST('/TambahUser', [UserController::class,'tambahCustomer'])->name('tambahCustomer');
    // Transaksi
    Route::POST('/Transaksi', [TransaksiController::class,'create'])->name('TransaksiCreate');
    Route::GET('/Produk', [TampilanController::class,'product'])->name('produkShow');
    Route::GET('/Produk/Category/{kategori}', [TampilanController::class,'kategori'])->name('kategoriProduk');

    // Wajib Login
Route::middleware('auth')->group(function () {
        Route::get('/Dashboard', [DashboardController::class,'index'])->name('dashboard');
        Route::POST('/Cart', [TampilanController::class,'cartTambah'])->name('cartTambah');
        Route::GET('/Cart', [TampilanController::class,'cart'])->name('cart');
        Route::POST('/Cart/Delete/{ID}', [CartController::class,'delete'])->name('hapusCart');
        Route::GET('/checkout', [TampilanController::class,'checkout'])->name('checkout');
        Route::GET('/{id}/success', [TransaksiController::class,'success'])->name('success');
        Route::POST('/{id}/success', [TransaksiController::class,'konfirmasiPembayaran'])->name('konfirmasiPembayaran');
    // USER
        Route::get('/daftar-Admin', [UserController::class,'admin'])->name('user');
        Route::post('/daftar-Admin', [UserController::class,'store'])->name('tambahUserProses');
        Route::post('/hapus-user/{id}', [UserController::class,'destroy'])->name('hapusUserProses');
        Route::get('/edit-user/{id}', [UserController::class,'edit'])->name('EditUser');
        Route::post('/edit-user/{id}', [UserController::class,'update'])->name('EditUserProses');
        Route::get('/daftar-customer', [UserController::class,'customer'])->name('customer');

    // Produk
        Route::get('/daftar-product', [ProductController::class,'index'])->name('product');
        Route::get('/tambah-product', [ProductController::class,'create'])->name('Tambahproduct');
        Route::POST('/tambahProdukProses', [ProductController::class,'store'])->name('tambahProdukProses');
        Route::POST('/hapusProduct/{id}', [ProductController::class,'destroy'])->name('hapusProduct');
        Route::get('/editProduct/{id}', [ProductController::class,'edit'])->name('produkEdit');
        Route::POST('/editProdukProses/{id}', [ProductController::class,'editProdukProses'])->name('editProdukProses');

    // Transaksi
        Route::get('/Transaksi', [TransaksiController::class,'index'])->name('Transaksi');
        Route::POST('/Transaksi/{id}/Delete', [TransaksiController::class,'delete'])->name('deleteTransaksi');
        Route::POST('/Transaksi/{id}/Update', [TransaksiController::class,'update'])->name('updateTransaksi');


    // Slider
        Route::get('/slider', [SliderController::class,'index'])->name('slider');
        Route::post('/sliderTambah', [SliderController::class,'store'])->name('tambahSlider');
        Route::Post('/sliderDelete/{id}', [SliderController::class,'destroy'])->name('sliderDelete');

    // MetodePembayaran
        Route::get('/Metode-Pembayaran', [DashboardController::class,'metodePembayaran'])->name('MetodePembayaran');
        Route::POST('/Metode-Pembayaran/{id}/hapus', [DashboardController::class,'hapusMetodePembayaran'])->name('hapusMetodePembayaran');
        Route::POST('/Metode-Pembayaran', [DashboardController::class,'tambahMetodePembayaran'])->name('tambahMetodePembayaran');

    // Pesan 
        Route::GET('/Pesan', [PesanController::class,'index'])->name('pesan');
        Route::POST('/Pesan/{id}/Hapus', [PesanController::class,'destroy'])->name('pesanHapus');
});