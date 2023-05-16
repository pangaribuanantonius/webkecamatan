<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $slider = \App\Models\Slider::all();
        return view('slider.index', ['slider' => $slider]);
    }

    public function create(){
        return view('slider.create');
    }

    public function store(Request $request){
        $datasudahvalidasi = $request->validate([
            'judul' => 'required',
            'foto_halaman' => 'file|mimes:jpg,png,jpeg|max:1024',
        ]);
        if ($request->hasFile('foto_halaman')) {
            $extFile = $request->foto_halaman->getClientOriginalExtension();
            $namaFile = time().".".$extFile;

            $request->foto_halaman->move('konten/slider', $namaFile);
            \App\Models\Slider::create([
                'judul' => $request->judul,
                'foto_halaman' => $namaFile,
            ]);
        }else{
            \App\Models\Slider::create([
                'judul' => $request->judul,
            ]);
        }
        return redirect('slider/index')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit(Slider $slider){
        return view('slider.edit', ['slider' => $slider]);
    }

}
