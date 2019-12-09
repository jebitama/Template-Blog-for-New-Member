<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class IndexController extends Controller
{
    public function index(){
        $berita = Berita::get();
        $berita = json_decode(json_encode($berita));
        return view('index')->with(compact('berita'));
    }
}
