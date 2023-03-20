<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Foto;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita = \App\Models\Berita::paginate(6);
        $foto = \App\Models\Foto::paginate(6);
        return view('index', ['berita' => $berita, 'foto' => $foto]);
    }
    public function show($id_berita){
        $berita = \App\Models\Berita::where('id_berita', $id_berita)->first();
        return view('berita-detail', ['berita' => $berita]);
    }
}
