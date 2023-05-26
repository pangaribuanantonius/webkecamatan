<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
     public function create(){
        return view('kegiatan.create');
    }
}
