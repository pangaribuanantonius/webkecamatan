<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoAllController extends Controller
{
    public function videoall(){
        $videoall = \App\Models\Video::all();
        return view('videoall', ['videoall' => $videoall]);
    }
}
