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
use App\Http\Controllers\AdminkegiatanController;
use App\Http\Controllers\LoginController;


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
Route::get('/{id}', [BeritaController::class, 'show'])->name('berita-detail');


//admin
Route::get('/info/index', [InfoController::class, 'index'])->name('info.index')->middleware('login.login');
Route::get('/info/create', [InfoController::class, 'create'])->name('info.create')->middleware('login.login');
Route::post('/info/store', [InfoController::class, 'store'])->name('info.store');
Route::get('/info/{info}/edit', [InfoController::class, 'edit'])->name('info.edit')->middleware('login.login');
Route::patch('/info/{info}/edit', [InfoController::class, 'update'])->name('info.edit');
Route::delete('/info/{info}/delete', [InfoController::class, 'destroy'])->name('info.delete');

Route::get('/profil/index', [ProfilController::class, 'index'])->name('profil.index')->middleware('login.login');
Route::get('/profil/create', [ProfilController::class, 'create'])->name('profil.create')->middleware('login.login');
Route::post('/profil/store', [ProfilController::class, 'store'])->name('profil.store');
Route::get('/profil/{profil}/edit', [ProfilController::class, 'edit'])->name('profil.edit')->middleware('login.login');
Route::patch('/profil/{profil}/edit', [ProfilController::class, 'update'])->name('profil.edit');
Route::delete('/profil/{profil}/delete', [ProfilController::class, 'destroy'])->name('profil.delete');

Route::get('/visimisi/index', [VisiMisiController::class, 'index'])->name('visimisi.index')->middleware('login.login');
Route::get('/visimisi/{visimisi}/edit', [VisimisiController::class, 'edit'])->name('visimisi.edit')->middleware('login.login');
Route::patch('/visimisi/{visimisi}/edit', [VisimisiController::class, 'update'])->name('visimisi.edit');

Route::get('/strukturorganisasi/index', [StrukturorganisasiController::class, 'index'])->name('strukturorganisasi.index')->middleware('login.login');
Route::get('/strukturorganisasi/{strukturorganisasi}/edit', [StrukturorganisasiController::class, 'edit'])->name('strukturorganisasi.edit')->middleware('login.login');
Route::patch('/strukturorganisasi/{strukturorganisasi}/edit', [StrukturorganisasiController::class, 'update'])->name('strukturorganisasi.edit');

Route::get('/kepegawaian/index', [KepegawaianController::class, 'index'])->name('kepegawaian.index')->middleware('login.login');
Route::get('/kepegawaian/create', [KepegawaianController::class, 'create'])->name('kepegawaian.create')->middleware('login.login');
Route::post('/kepegawaian/store', [KepegawaianController::class, 'store'])->name('kepegawaian.store');
Route::get('/kepegawaian/{kepegawaian}/edit', [KepegawaianController::class, 'edit'])->name('kepegawaian.edit')->middleware('login.login');
Route::patch('/kepegawaian/{kepegawaian}/edit', [KepegawaianController::class, 'update'])->name('kepegawaian.edit');
Route::delete('/kepegawaian/{kepegawaian}/delete', [KepegawaianController::class, 'destroy'])->name('kepegawaian.delete');

Route::get('/desa/index', [DesaController::class, 'index'])->name('desa.index')->middleware('login.login');
Route::get('/desa/create', [DesaController::class, 'create'])->name('desa.create')->middleware('login.login');
Route::post('/desa/store', [DesaController::class, 'store'])->name('desa.store');
Route::get('/desa/{desa}/edit', [DesaController::class, 'edit'])->name('desa.edit')->middleware('login.login');
Route::patch('/desa/{desa}/edit', [DesaController::class, 'update'])->name('desa.edit');
Route::delete('/desa/{desa}/delete', [DesaController::class, 'destroy'])->name('desa.delete');

Route::get('/kegiatan/index', [AdminkegiatanController::class, 'index'])->name('kegiatan.index')->middleware('login.login');
Route::get('/kegiatan/create', [AdminkegiatanController::class, 'create'])->name('kegiatan.create')->middleware('login.login');
Route::post('/kegiatan/store', [AdminkegiatanController::class, 'store'])->name('kegiatan.store');
Route::get('/kegiatan/{kegiatan}/edit', [AdminkegiatanController::class, 'edit'])->name('kegiatan.edit')->middleware('login.login');
Route::patch('/kegiatan/{kegiatan}/edit', [AdminkegiatanController::class, 'update'])->name('kegiatan.edit');
Route::delete('/kegiatan/{kegiatan}/delete', [AdminkegiatanController::class, 'destroy'])->name('kegiatan.delete');

//login
Route::get('/login/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/login/login', [LoginController::class, 'postlogin'])->name('login.postlogin');

//logout
Route::get('/login/logout', [LoginController::class, 'logout'])->name('login.logout');