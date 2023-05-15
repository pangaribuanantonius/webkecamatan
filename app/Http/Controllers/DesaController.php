<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function desa(){
        $settings = \App\Models\Settings::first();
        $desa = \App\Models\Desa::all();
        return view('desa', ['settings' => $settings, 'desa' => $desa]);
    }

    public function index(){
        $desa = \App\Models\Desa::all();
        return view('desa.index', ['desa' => $desa]);
    }

    public function create(){
        return view('desa.create');
    }

    public function store(Request $request){
        \App\Models\Desa::create([
                'nama' => $request->nama,
                'kepala' => $request->kepala,
            ]);
        return redirect('desa/index')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit(Desa $desa){
        return view('desa.edit', ['desa' => $desa]);
    }

    public function update(Request $request, Desa $desa){
        $desa->update([
            'nama' => $request->nama,
            'kepala' => $request->kepala,
            ]);
        return redirect('desa/index')->with('update', 'Berhasil Mengubah Data!');
    }

    public function destroy(Request $request, Desa $desa){
            $desa::destroy($desa->id);
        return redirect('desa/index')->with('delete', 'Berhasil Menghapus Data!');
    }
}
