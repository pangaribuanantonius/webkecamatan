<?php
 
namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\SLider;
use App\Models\Info;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $carbon = new \Carbon\Carbon;
        $settings = \App\Models\Settings::first();
        $slider = \App\Models\Slider::All();
        $marquee = \App\Models\Info::all();
        $berita = \App\Models\Berita::limit(6)->get();
        $foto = \App\Models\Foto::limit(6)->get();
        $video = \App\Models\Video::limit(6)->get();
        return view('index', ['settings' => $settings, 'slider' => $slider, 'marquee' => $marquee, 'berita' => $berita, 'foto' => $foto, 'video' => $video, 'carbon' => $carbon]);
    }

    public function show($id){
        $settings = \App\Models\Settings::first();
        $berita = Berita::Where('id', $id)->first();
        $carbon = new \Carbon\Carbon;
        return view('berita-detail', ['settings' => $settings, 'berita' => $berita, 'carbon' => $carbon]);
    }
}
