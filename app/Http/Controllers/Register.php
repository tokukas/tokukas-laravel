<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Daftar | TOKUKAS'
        ]);
    }
}
