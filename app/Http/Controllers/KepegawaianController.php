<?php

namespace App\Http\Controllers;

use App\Models\Kepegawaian;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function kepegawaian(){
        $kepegawaian = \App\Models\Kepegawaian::all(); //menampilkan semua kegiatan
        return view('kepegawaian', ['kepegawaian' => $kepegawaian]); //return kegiatan yang diseleksi
    }
}
