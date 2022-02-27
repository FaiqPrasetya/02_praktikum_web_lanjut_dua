<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "NIM   : 2041720239 <br>";
        echo "Nama  : Muhammad Faiq Prasetya <br>";
        echo "Kelas : TI-2D <br>";
    }

    public function articles($id) {
        echo "Ini merupakan halaman artikel dengan id " . $id;
    }
}
