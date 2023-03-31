<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminkegiatanController extends Controller
{
     public function index(){
        $kegiatan = \App\Models\Berita::all(); //menampilkan semua kegiatan
        return view('kegiatan.index', ['kegiatan' => $kegiatan]); //return kegiatan yang diseleksi
    }

     public function create(){
        return view('kegiatan.create');
    }

    public function store(Request $request){
        $datasudahvalidasi = $request->validate([
            'isi_berita' => 'required',
            'foto_berita' => 'file|mimes:jpg,png,jpeg|max:1024',
        ]);
        if ($request->hasFile('foto_berita')) {
            $extFile = $request->foto_berita->getClientOriginalExtension();
            $namaFile = time().".".$extFile;

            $request->foto_berita->move('konten/foto_berita', $namaFile);
            \App\Models\Berita::create([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
                'foto_berita' => $namaFile,
            ]);
        }else{
            \App\Models\Berita::create([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
            ]);
        }
        return redirect('kegiatan/index');
    }

    public function edit(Berita $id_berita){
        return view('kegiatan.edit', ['kegiatan' => $id_berita]);
    }
}
