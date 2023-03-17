<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function desa(){
        $desa = \App\Models\Desa::all();
        return view('desa', ['desa' => $desa]);
    }
}
