<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function inscription() {
        return view('auth.inscription');
    }

    public function connexion() {
        return view('auth.connexion');
    }
}
