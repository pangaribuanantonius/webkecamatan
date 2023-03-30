<?php

namespace App\Http\Controllers;

use App\Models\Strukturorganisasi;
use Illuminate\Http\Request;

class StrukturorganisasiController extends Controller
{
    public function index(){
        $strukturorganisasi = \App\Models\Strukturorganisasi::first();
        return view('strukturorganisasi.index', ['strukturorganisasi' => $strukturorganisasi]);
    }
}
