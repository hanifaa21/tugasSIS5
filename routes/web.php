<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;


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
    return view('welcome');
});

Route::get('/salam', function(){
    return "Assalamualaikum selamat belajar Laravel";
});

//tambah routing dengan parameter
Route::get('/staff/{nama}/{devisi}', function($nama, $devisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$devisi;
});

//routing dengan memanggil nama file dari view
Route::get('/kondisi', function(){
    return view('kondisi');
});

Route::get('/nilai', function(){
    return view('coba.nilai');
});

// routing dengan view dan array data
Route::get('/daftarnilai', function(){
    return view('coba.daftar');
});

// routing memanggil dari kelas controller
Route::get('/datamahasiswa',[LihatNilaiController::class, 'dataMahasiswa']); 

Route::prefix('admin')->group(function(){
//routing memanggil dari kelas controller index /dashboard
Route::get('/dashboard',[DashboardController::class, 'index']);

//routing pemanggilan dari kelas kontroller index /pagenot
Route::get('/pagenot', [PagenotController::class, ' index']);

//memanggil seluruh fungsi atau function menggunakan resource
Route::resource('kartu', KartuController::class);

Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
Route::get('/jenis_produk/create', [JenisProdukController::class, 'create']);
Route::post('/jenis_produk/store', [JenisProdukController::class, 'store']);
Route::get('/jenis_produk/edit/{id}', [JenisProdukController::class, 'edit']); //pake id
Route::post('/jenis_produk/update/{id}', [JenisProdukController::class, 'update']); //pake id


Route::get('produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/show/{id}', [ProdukController::class, 'show']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Route::resource('pelanggan', PelangganController::class);
});
