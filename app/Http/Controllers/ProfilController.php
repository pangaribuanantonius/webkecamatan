<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $profil = \App\Models\Tentang::all();
        return view('profil.index', ['profil' => $profil]);
    }

    public function create(){
        return view('profil.create');
    }

    public function store(Request $request){
        \App\Models\Tentang::create([
                'judul' => $request->judul, 
                'isi' => $request->isi,
            ]);
        return redirect('profil/index');
    }

    public function edit(Tentang $profil){
        return view('profil.edit', ['profil' => $profil]);
    }

    public function update(Request $request, Tentang $profil){
        $profil->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            ]);
        return redirect('profil/index');
    }
    public function destroy(Request $request, Tentang $profil){
            $profil::destroy($profil->id);
        return redirect('profil/index');
    }
}
