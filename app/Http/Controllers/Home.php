<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('home/index', [
            'title' => 'TOKUKAS | Toko Buku Bekas',
            'myName' => 'Fityan'
        ]);
    }
}
