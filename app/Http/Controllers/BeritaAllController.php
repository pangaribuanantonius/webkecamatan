<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaAllController extends Controller
{
    public function beritaall(){
        $carbon = new \Carbon\Carbon;
        $settings = \App\Models\Settings::first();
        $beritaall = \App\Models\Berita::latest()->paginate(6);
        return view('beritaall', ['settings' => $settings, 'beritaall' => $beritaall, 'carbon' => $carbon]);
    }
}
