<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\BeritaAllController;
use App\Http\Controllers\VideoAllController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\StrukturorganisasiController;


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

/*Route::get('/admin', function () {
    return view('admin');
});*/

//admin
Route::get('/beranda/index', function () {
    return view('beranda.index');
});


/*Route::get('/info/', function () {
    return view('info.index');
});*/



Route::get('/', [BeritaController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');
Route::get('/kepegawaian', [KepegawaianController::class, 'kepegawaian'])->name('kepegawaian');
Route::get('/desa', [DesaController::class, 'desa'])->name('desa');
Route::get('/beritaall', [BeritaAllController::class, 'beritaall'])->name('beritaall');
Route::get('/videoall', [VideoAllController::class, 'videoall'])->name('videoall');
Route::get('/{id_berita}', [BeritaController::class, 'show'])->name('berita-detail');


//admin
Route::get('/info/index', [InfoController::class, 'index'])->name('info.index');
Route::get('/info/create', [InfoController::class, 'create'])->name('info.create');
Route::post('/info/store', [InfoController::class, 'store'])->name('info.store');
Route::get('/info/{info}/edit', [InfoController::class, 'edit'])->name('info.edit');
Route::patch('/info/{info}/edit', [InfoController::class, 'update'])->name('info.edit');
Route::delete('/info/{info}/delete', [InfoController::class, 'destroy'])->name('info.delete');

Route::get('/profil/index', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/create', [ProfilController::class, 'create'])->name('profil.create');
Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
Route::get('/profil/{profil}/edit', [ProfilController::class, 'edit'])->name('profil.edit');
Route::patch('/profil/{profil}/edit', [ProfilController::class, 'update'])->name('profil.edit');
Route::delete('/profil/{profil}/delete', [ProfilController::class, 'destroy'])->name('profil.delete');

Route::get('/visimisi/index', [VisiMisiController::class, 'index'])->name('visimisi.index');
Route::get('/visimisi/{visimisi}/edit', [VisimisiController::class, 'edit'])->name('visimisi.edit');
Route::patch('/visimisi/{visimisi}/edit', [VisimisiController::class, 'update'])->name('visimisi.edit');

Route::get('/strukturorganisasi/index', [StrukturorganisasiController::class, 'index'])->name('strukturorganisasi.index');
Route::get('/strukturorganisasi/{strukturorganisasi}/edit', [StrukturorganisasiController::class, 'edit'])->name('strukturorganisasi.edit');
Route::patch('/strukturorganisasi/{strukturorganisasi}/edit', [StrukturorganisasiController::class, 'update'])->name('strukturorganisasi.edit');

Route::get('/kepegawaian/index', [KepegawaianController::class, 'index'])->name('kepegawaian.index');
Route::get('/kepegawaian/create', [KepegawaianController::class, 'create'])->name('kepegawaian.create');
Route::post('/kepegawaian/store', [KepegawaianController::class, 'store'])->name('kepegawaian.store');
Route::get('/kepegawaian/{kepegawaian}/edit', [KepegawaianController::class, 'edit'])->name('kepegawaian.edit');
Route::patch('/kepegawaian/{kepegawaian}/edit', [KepegawaianController::class, 'update'])->name('kepegawaian.edit');
Route::delete('/kepegawaian/{kepegawaian}/delete', [KepegawaianController::class, 'destroy'])->name('kepegawaian.delete');

Route::get('/desa/index', [DesaController::class, 'index'])->name('desa.index');
Route::get('/desa/create', [DesaController::class, 'create'])->name('desa.create');
Route::post('/desa/store', [DesaController::class, 'store'])->name('desa.store');
Route::get('/desa/{desa}/edit', [DesaController::class, 'edit'])->name('desa.edit');
Route::patch('/desa/{desa}/edit', [DesaController::class, 'update'])->name('desa.edit');
Route::delete('/desa/{desa}/delete', [DesaController::class, 'destroy'])->name('desa.delete');

Route::get('/kegiatan/index', [KegiatanController::class, 'index'])->name('kegiatan.index');