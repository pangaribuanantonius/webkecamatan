<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoAllController extends Controller
{
    public function videoall(){
        $settings = \App\Models\Settings::first();
        $videoall = \App\Models\Video::all();
        return view('videoall', ['settings' => $settings, 'videoall' => $videoall]);
    }
}
