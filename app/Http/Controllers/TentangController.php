<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function tentang(){
        $settings = \App\Models\Settings::first();
        $tentang = \App\Models\Tentang::all();
        return view('tentang', ['settings' => $settings, 'tentang' => $tentang]);
    }
}
