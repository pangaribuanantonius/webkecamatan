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
            'foto_halaman' => 'file|mimes:jpg,png,jpeg|max:3072',
        ]);
        if ($request->hasFile('foto_halaman')) {
            $extFile = $request->foto_halaman->getClientOriginalExtension();
            $namaFile = time().".".$extFile;

            $request->foto_halaman->move('konten/slider', $namaFile);
            \App\Models\Slider::create([
                'judul' => $request->judul,
                'foto_halaman' => $namaFile,
                'status' => 'Draft',
            ]);
        }else{
            \App\Models\Slider::create([
                'judul' => $request->judul,
                'status' => 'Draft',
            ]);
        }
        return redirect('slider/index')->with('success', 'Berhasil Menambah Data!');
    }

    public function edit(Slider $slider){
        return view('slider.edit', ['slider' => $slider]);
    }

    public function update(Request $request, Slider $slider){
        $datasudahvalidasi = $request->validate([
            'judul' => 'required',
            'foto_halaman' => 'file|mimes:jpg,png,jpeg|max:3072',
        ]);
        

        if ($request->hasFile('foto_halaman')) {
            if ($slider->foto_halaman!=='kosong.png') {
                unlink('konten/slider/'.$slider->foto_halaman);
            }
            
            $extFile = $request->foto_halaman->getClientOriginalExtension();
            $namaFile = time().".".$extFile;
            $request->foto_halaman->move('konten/slider', $namaFile);
            $slider->update([
            'judul' => $request->judul,
            'foto_halaman' => $namaFile,
            'status' => $request->status,
            ]);
        }else{
            $slider->update([
            'judul' => $request->judul,
            'status' => $request->status,
            ]);
        }
        return redirect('slider/index')->with('update', 'Berhasil Mengubah Data!');        
    }

    public function destroy(Request $request, Slider $slider){
        if (!$slider->foto_halaman == 'kosong.png') {
            $slider::destroy($slider->id);
            unlink('konten/slider/'.$slider->foto_halaman);
        }else{
            $slider::destroy($slider->id);
            unlink('konten/slider/'.$slider->foto_halaman);
        }
        
        return redirect('slider/index')->with('delete', 'Berhasil Menghapus Data!');

    }

}
