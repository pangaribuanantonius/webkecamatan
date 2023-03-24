<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaAllController extends Controller
{
    public function beritaall(){
        $beritaall = \App\Models\Berita::all();
        return view('beritaall', ['beritaall' => $beritaall]);
    }
}
