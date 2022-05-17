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


    public function verify()
    {
        $viewData['title'] = 'Verifikasi | TOKUKAS';

        $email = request('email');
        $viewData['email'] = $email;

        // TODO: Send email verification code to user's email

        return view('register.verify', $viewData);
    }


    public function new()
    {
        return view('register.new', [
            'title' => 'Buat Akun | TOKUKAS'
        ]);
    }
}
