<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\BeritaAllController;
use App\Http\Controllers\VideoAllController;

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

Route::get('/visimisi', function () {
    return view('visimisi');
});

//admin
Route::get('/beranda/', function () {
    return view('beranda.index');
});



Route::get('/', [BeritaController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');
Route::get('/kepegawaian', [KepegawaianController::class, 'kepegawaian'])->name('kepegawaian');
Route::get('/desa', [DesaController::class, 'desa'])->name('desa');
Route::get('/beritaall', [BeritaAllController::class, 'beritaall'])->name('beritaall');
Route::get('/videoall', [VideoAllController::class, 'videoall'])->name('videoall');
Route::get('/{id_berita}', [BeritaController::class, 'show'])->name('berita-detail');


