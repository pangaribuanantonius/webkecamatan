<?php

namespace App\Http\Controllers;

use App\Models\Kepegawaian;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function kepegawaian(){
        $settings  = \App\Models\Settings::first();
        $kepegawaian = \App\Models\Kepegawaian::all(); //menampilkan semua kegiatan
        return view('kepegawaian', ['settings' => $settings,'kepegawaian' => $kepegawaian]); //return kegiatan yang diseleksi
    }

    public function index(){
        $kepegawaian = \App\Models\Kepegawaian::all(); //menampilkan semua kegiatan
        return view('kepegawaian.index', ['kepegawaian' => $kepegawaian]); //return kegiatan yang diseleksi
    }

    public function create(){
        return view('kepegawaian.create'); //return kegiatan yang diseleksi
    }

    public function store(Request $request){
        \App\Models\Kepegawaian::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'golongan' => $request->golongan,
                'jabatan' => $request->jabatan,
            ]);
        return redirect('kepegawaian/index')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit(Kepegawaian $kepegawaian){
        return view('kepegawaian.edit', ['kepegawaian' => $kepegawaian]);
    }

    public function update(Request $request, Kepegawaian $kepegawaian){
        $kepegawaian->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
            ]);
        return redirect('kepegawaian/index')->with('update', 'Berhasil Mengubah Data!');
    }

    public function destroy(Request $request, Kepegawaian $kepegawaian){
            $kepegawaian::destroy($kepegawaian->id);
        return redirect('kepegawaian/index')->with('delete', 'Berhasil Menghapus Data!');
    }
}
