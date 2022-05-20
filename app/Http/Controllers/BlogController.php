<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home() {
        return view('main');
    }

    public function tentang() {
        return view('tentang');
    }

    public function kontak() {
        return view('kontak');
    }

    public function kontenbawah() {
        return view('konten_bawah');
    }

    public function ourservice() {
        return view('ourservice');
    }
}
