<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\TentangController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [BeritaController::class, 'index'])->name('index');
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');

Route::get('/visimisi', function () {
    return view('visimisi');
});
Route::get('/strukturorganisasi', function () {
    return view('strukturorganisasi');
});
Route::get('/kepegawaian', function () {
    return view('kepegawaian');
});



