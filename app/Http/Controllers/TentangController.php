<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function(tentang){
        $tentang = \App\Models\Tentang::all();
        return view('tentang', ['tentang' => $tentang);
    }
}
