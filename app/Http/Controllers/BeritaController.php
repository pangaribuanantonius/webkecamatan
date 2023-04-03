<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $marquee = \App\Models\Info::all();
        $berita = \App\Models\Berita::limit(6)->get();
        $foto = \App\Models\Foto::limit(6)->get();
        $video = \App\Models\Video::limit(6)->get();
        return view('index', ['marquee' => $marquee, 'berita' => $berita, 'foto' => $foto, 'video' => $video]);
    }
    public function show($id){
        $berita = \App\Models\Berita::where('id', $id)->first();
        return view('berita-detail', ['berita' => $berita]);
    }
}
