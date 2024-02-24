<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }
       public function about() {
        return 'Maulana Arya 2241720199';
       }
       public function articles($id) {
        return 'Nomor Antrian '.$id;
       }
}
