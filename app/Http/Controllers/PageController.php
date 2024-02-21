<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return "Nama : Rama Pramudhita Bhaskara | NIM : 2241720128";
    }

    public function articles($articleId) {
        return 'Halaman Artikel dengan ID ke-'.$articleId;
    }
}
