<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminkegiatanController extends Controller
{
     public function index(){
        $kegiatan = \App\Models\Berita::all(); //menampilkan semua kegiatan
        $carbon = new \Carbon\Carbon;
        return view('kegiatan.index', ['kegiatan' => $kegiatan, 'carbon' => $carbon]); //return kegiatan yang diseleksi
    }

     public function create(){
        $berkas = \App\Models\Berkas::all();
        return view('kegiatan.create',['berkas' => $berkas]);
    }

    public function store(Request $request){
        $datasudahvalidasi = $request->validate([
            'isi_berita' => 'required',
            'foto_berita' => 'file|mimes:jpg,png,jpeg|max:2048',
        ]);
        if ($request->hasFile('foto_berita')) {
            $extFile = $request->foto_berita->getClientOriginalExtension();
            $namaFile = time().".".$extFile;

            $request->foto_berita->move('konten/foto_berita', $namaFile);
            \App\Models\Berita::create([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
                'foto_berita' => $namaFile,
                'status' => 'Draft',
            ]);
        }else{
            \App\Models\Berita::create([
                'judul_berita' => $request->judul_berita,
                'isi_berita' => $request->isi_berita,
                'status' => 'Draft',
            ]);
        }
        return redirect('kegiatan/index')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit(Berita $kegiatan){
        $berkas = \App\Models\Berkas::all();
        return view('kegiatan.edit', ['kegiatan' => $kegiatan, 'berkas' => $berkas]);
    }

     public function update(Request $request, Berita $kegiatan){
        $datasudahvalidasi = $request->validate([
            'foto_berita' => 'file|mimes:jpg,png,jpeg|max:2048',
        ]);
        

        if ($request->hasFile('foto_berita')) {
            if ($kegiatan->foto_berita!=='kosong.png') {
                unlink('konten/foto_berita/'.$kegiatan->foto_berita);
            }
            
            $extFile = $request->foto_berita->getClientOriginalExtension();
            $namaFile = time().".".$extFile;
            $request->foto_berita->move('konten/foto_berita', $namaFile);
            $kegiatan->update([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'foto_berita' => $namaFile,
            'status' => $request->status,
            ]);
        }else{
            $kegiatan->update([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'status' => $request->status,
            ]);
        }
        return redirect('kegiatan/index')->with('update', 'Berhasil Mengubah Data!');        
    }

    public function destroy(Request $request, Berita $kegiatan){
        if (!$kegiatan->foto_berita == 'kosong.png') {
            $kegiatan::destroy($kegiatan->id);
            unlink('konten/foto_berita/'.$kegiatan->foto_berita);
        }else{
            $kegiatan::destroy($kegiatan->id);
            unlink('konten/foto_berita/'.$kegiatan->foto_berita);
        }
        
        return redirect('kegiatan/index')->with('delete', 'Berhasil Menghapus Data!');

    }

}
