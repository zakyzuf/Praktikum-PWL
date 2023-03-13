<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2141720173, Mochammad Zaky Zamroni';
    }

    public function article($id) {
        'Halaman Artikel dengan ID '.$id;
    }
}
