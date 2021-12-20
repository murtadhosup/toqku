<?php

use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Santri;
use App\Models\Pengurus;
use App\Models\peran;
use App\Models\Bab;

// panggil controller agar bisa digunakan pada route
// controller dipanggil sesuai nama dan lokasi filenya
use App\Http\Controllers\Dashboard\SantriController;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\PengurusController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\peranController;
use App\Http\Controllers\Dashboard\BabController;

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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/buku', function () {
    $buku = Buku::all();
    return view('buku',['data'=>$buku]);
});

Route::get('/santri', function () {
    $santri = Santri::all();
    return view('santri',['data'=>$santri]);
});

Route::get('/pengurus', function () {
    $pengurus = Pengurus::all();
    return view('pengurus',['data'=>$pengurus]);
});

Route::get('/login', function () {
    return view('/dashboard/login');
});
Route::get('/register', function () {
    return view('/dashboard/register');
});

Route::get('/dashboard/login', [LoginController::class, 'index'])->name('login');
Route::post('/dashboard/login/authenticate', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function() {

Route::get('/dashboard',[SantriController::class,'index']);
Route::get('/dashboard/santri/form',[SantriController::class,'showFormTambah']);
Route::get('/dashboard/santri/hapus/{id}',[SantriController::class,'hapus']);
Route::post('/dashboard/santri/tambah',[SantriController::class,'tambah']);
Route::get('/dashboard/santri/form/{id}',[SantriController::class,'showFormUpdate']);
Route::post('/dashboard/santri/update/{id}', [SantriController::class, 'update']);


Route::get('/dashboard/buku',[BukuController::class,'index']);
Route::get('/dashboard/buku/hapus/{id}',[BukuController::class,'hapus']);
Route::get('/dashboard/buku/form',[BukuController::class,'showFormTambah']);
Route::post('/dashboard/buku/tambah',[BukuController::class,'tambah']);
Route::get('/dashboard/buku/form/{id}',[BukuController::class,'showFormUpdate']);
Route::post('/dashboard/buku/update/{id}',[BukuController::class,'update']);

Route::get('/dashboard/pengurus',[PengurusController::class,'index']);
Route::get('/dashboard/pengurus/form', [PengurusController::class, 'showFormTambah']);
Route::post('/dashboard/pengurus/tambah', [PengurusController::class, 'tambah']);
Route::get('/dashboard/pengurus/hapus/{id}', [PengurusController::class, 'hapus']);
Route::get('/dashboard/pengurus/form/{id}', [PengurusController::class, 'showFormUpdate']);
Route::post('/dashboard/pengurus/update/{id}', [PengurusController::class, 'update']);

Route::get('/dashboard/logout', [LoginController::class, 'logout']);

});

//peran
Route::get('/dashboard/peran',[peranController::class,'index']);
Route::get('/dashboard/peran/form', [peranController::class, 'showFormTambah']);
Route::post('/dashboard/peran/tambah', [peranController::class, 'tambah']);
Route::get('/dashboard/peran/hapus/{id}', [peranController::class, 'hapus']);
Route::get('/dashboard/peran/form/{id}', [peranController::class, 'showFormUpdate']);
Route::post('/dashboard/peran/update/{id}', [peranController::class, 'update']);

//Bab
Route::get('/dashboard/Bab','App\Http\Controllers\Dashboard\BabController@index');
Route::get('/dashboard/Bab/form', [BabController::class, 'showFormTambah']);
Route::post('/dashboard/Bab/tambah', [BabController::class, 'tambah']);
Route::get('/dashboard/Bab/hapus/{id}', [BabController::class, 'hapus']);
Route::get('/dashboard/Bab/form/{id}', [BabController::class, 'showFormUpdate']);
Route::post('/dashboard/Bab/update/{id}', [BabController::class, 'update']);

