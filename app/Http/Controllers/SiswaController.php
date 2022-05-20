<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        // return "hallo ini adalah method index, dalam controller siswaController";
        // return view('biodatasiswa');
        $nama = "Ariesta";
        $pelajaran = ["Pemrograman web","jaringan komputer"];
        return view('biodatasiswa', ['nama'=>$nama, 'mapel'=>$pelajaran]);
    }
}
