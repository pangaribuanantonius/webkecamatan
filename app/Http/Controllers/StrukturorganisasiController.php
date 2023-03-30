<?php

namespace App\Http\Controllers;

use App\Models\Strukturorganisasi;
use Illuminate\Http\Request;

class StrukturorganisasiController extends Controller
{
    public function index(){
        $strukturorganisasi = \App\Models\Strukturorganisasi::all();
        return view('strukturorganisasi.index', ['strukturorganisasi' => $strukturorganisasi]);
    }

    public function edit(Strukturorganisasi $strukturorganisasi){
        return view('strukturorganisasi.edit', ['strukturorganisasi' => $strukturorganisasi]);
    }

    public function update(Request $request, Strukturorganisasi $strukturorganisasi){
        $datasudahvalidasi = $request->validate([
            'gambar' => 'file|mimes:jpg,png,jpeg|max:1024',
        ]);
        

        if ($request->hasFile('gambar')) {
            if ($strukturorganisasi->gambar!=='kosong.png') {
                unlink('konten/gambar/'.$strukturorganisasi->gambar);
            }
            
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = time().".".$extFile;
            $request->gambar->move('konten/gambar', $namaFile);
            $strukturorganisasi->update([
            'isi' => $request->isi,
            'gambar' => $namaFile,
            ]);
        }else{
            $strukturorganisasi->update([
            'isi' => $request->isi,
            ]);
        }
        return redirect('strukturorganisasi/index');        
    }
}
