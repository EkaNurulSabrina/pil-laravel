<?php

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
    return view('UTS laravel/home');
});

Route::get('produk', function () {
    return view('UTS lravel/produk');
});

Route::get('array',function(){
    for ($i=1; $i <= 5; $i++) { 
        echo 'Hello World ' . $i . 'x<br>';
    }
});



Route::get('form', function () {
    return view('UTS laavel/form');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('produk', function () {
    $kodeproduk = ['BRG001', 'BRG002'];
    $namaproduk = ['Buku', 'Pena'];
    $jenisproduk = ['Alat Tulis', 'Alat Tulis'];
    $harga = [20000, 15000];
    $jumlah = count($kodeproduk);
    return view('produk', compact('kodeproduk', 'namaproduk', 'jenisproduk', 'harga', 'jumlah'));
});

Route::get('form', function () {
    $jenisProduk = ['Jenis Produk', 'Alat Tulis', 'Elektronik', 'Sembako'];
    $jumlahproduk = count($jenisProduk);
    return view('form', compact('jenisProduk', 'jumlahproduk'));
});