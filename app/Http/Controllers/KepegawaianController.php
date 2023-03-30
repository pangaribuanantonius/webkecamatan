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
        return redirect('kepegawaian/index');
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
        return redirect('kepegawaian/index');
    }

    public function destroy(Request $request, Kepegawaian $kepegawaian){
            $kepegawaian::destroy($kepegawaian->id);
        return redirect('kepegawaian/index');
    }
}
