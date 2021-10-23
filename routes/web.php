<?php

use Illuminate\Support\Facades\Route;

// panggil controller agar bisa digunakan pada route
// controller dipanggil sesuai nama dan lokasi filenya
use App\Http\Controllers\Dashboard\SantriController;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\PengurusController;
use App\Http\Controllers\Dashboard\LoginController;


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


Route::get('/login', function () {
    return view('/dashboard/login');
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



