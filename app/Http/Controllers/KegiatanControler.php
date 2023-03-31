<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanControler extends Controller
{
    public function index(){
        $kegiatan = \App\Models\Kegiatan::all(); //menampilkan semua kegiatan
        return view('index', ['kegiatan' => $kegiatan]); //return kegiatan yang diseleksi
    }

    public function index(){
        $kegiatan = \App\Models\Kegiatan::all(); //menampilkan semua kegiatan
        return view('kegiatan.index', ['kegiatan' => $kegiatan]); //return kegiatan yang diseleksi
    }
}
