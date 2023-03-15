<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index(){
        $foto = \App\Models\Foto::all();
        return view('index', ['foto' => $foto]);
    }
}
