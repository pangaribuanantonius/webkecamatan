<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function desa(){
        $desa = \App\Models\Desa::all();
        return view('desa', ['desa' => $desa]);
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
            ]);
        return redirect('desa/index');
    }

    public function edit(Desa $desa){
        return view('desa.edit', ['desa' => $desa]);
    }

    public function update(Request $request, Desa $desa){
        $desa->update([
            'nama' => $request->nama,
            ]);
        return redirect('desa/index');
    }

    public function destroy(Request $request, Desa $desa){
            $desa::destroy($desa->id);
        return redirect('desa/index');
    }
}
