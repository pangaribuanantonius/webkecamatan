<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function alamat(){
        $settings = \App\Models\Settings::first();
        return view('alamat', ['settings' => $settings]);
    }

    public function index(){
        $settings = \App\Models\Settings::all();
        return view('settings.index', ['settings' => $settings]);
    }

    public function edit(Settings $settings){
        return view('settings.edit', ['settings' => $settings]);
    }

     public function update(Request $request, Settings $settings){
        $settings->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'fb' => $request->fb,
            'ig' => $request->ig,
            'yt' => $request->yt,
            'map' => $request->map,
            ]);
        return redirect('settings/index')->with('update', 'Berhasil Mengubah Data!');
    }
}
