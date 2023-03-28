<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        $runningtext = \App\Models\Info::all();
        return view('info.index', ['runningtext' => $runningtext]);
    }

    public function create(){
        return view('info.create');
    }

    public function store(Request $request){
        \App\Models\Info::create([
                'isi' => $request->isi,
            ]);
        return redirect('info/index');
    }

     public function edit(Info $info){
        return view('info.edit', ['info' => $info]);
    }

    public function update(Request $request, Info $info){
        $info->update([
            'isi' => $request->isi,
            ]);
        return redirect('info/index');
    }

    public function destroy(Request $request, Info $info){
            $info::destroy($info->id);
        return redirect('info/index');
    }

}
