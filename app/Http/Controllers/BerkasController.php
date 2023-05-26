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
        return view('berkas.create');
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

}
