<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function visimisi(){
        $settings = \App\models\Settings::first();
        $visimisi = \App\Models\Visimisi::all();
        return view('visimisi', ['settings' => $settings, 'visimisi' => $visimisi]);
    }

    public function index(){
        $visimisi = \App\Models\Visimisi::all();
        return view('visimisi.index', ['visimisi' => $visimisi]);
    }

    public function edit(Visimisi $visimisi){
        return view('visimisi.edit', ['visimisi' => $visimisi]);
    }

    public function update(Request $request, Visimisi $visimisi){
        $visimisi->update([
            'isi' => $request->isi,
            ]);
        return redirect('visimisi/index')->with('update', 'Berhasil Mengubah Data!');
    }

    public function destroy(Request $request, Visimisi $visimisi){
            $visimisi::destroy($visimisi->id);
        return redirect('visimisi/index');
    }
}
