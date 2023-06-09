<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index(){
        $berkas = \App\Models\Berkas::all();
        return view('berkas.index', ['berkas' => $berkas]); //return kegiatan yang diseleksi
    }

    public function create(){
        $berkas = \App\Models\Berkas::all();
        return view('berkas.create', ['berkas' => $berkas]);
    }

   public function store(Request $request){
        $datasudahvalidasi = $request->validate([
            'berkas' => 'file|mimes:jpg,png,jpeg,pdf|max:2048',
        ]);
        if ($request->hasFile('berkas')) {
            $extFile = $request->berkas->getClientOriginalExtension();
            $namaFile = time().".".$extFile;

            $request->berkas->move('konten/berkas', $namaFile);
            \App\Models\Berkas::create([
                'keterangan' => $request->keterangan,
                'berkas' => $namaFile,
            ]);
        }else{
            \App\Models\Berkas::create([
                'keterangan' => $request->keterangan,
            ]);
        }
        return redirect('berkas/create')->with('success', 'Berhasil Menambah Data!');;
    }

    public function edit(Berkas $berkas){
        return view('berkas.edit', ['berkas' => $berkas]);
    }

    public function update(Request $request, Berkas $berkas){
        $datasudahvalidasi = $request->validate([
            'berkas' => 'file|mimes:jpg,png,jpeg,pdf|max:2048',
        ]);
        

        if ($request->hasFile('berkas')) {
            if ($berkas->berkas!=='kosong.png') {
                unlink('konten/berkas/'.$berkas->berkas);
            }
            
            $extFile = $request->berkas->getClientOriginalExtension();
            $namaFile = time().".".$extFile;
            $request->berkas->move('konten/berkas', $namaFile);
            $berkas->update([
            'keterangan' => $request->keterangan,
            'berkas' => $namaFile,
            ]);
        }else{
            $berkas->update([
            'keterangan' => $request->keterangan,
            ]);
        }
        return redirect('berkas/create')->with('update', 'Berhasil Mengubah Data!');        
    }

    public function destroy(Request $request, Berkas $berkas){
        if (!$berkas->berkas == 'kosong.png') {
            $berkas::destroy($berkas->id);
            unlink('konten/berkas/'.$berkas->berkas);
        }else{
            $berkas::destroy($berkas->id);
            unlink('konten/berkas/'.$berkas->berkas);
        }
        
        return redirect('berkas/create')->with('delete', 'Berhasil Menghapus Data!');

    }

}
