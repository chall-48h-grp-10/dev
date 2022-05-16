<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function inscription() {
        return view('auth.inscription');
    }

    public function connexion() {
        return view('auth.connexion');
    }

    public function userInscription(Request $request) {
        $request->validate([
            'user_name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        if ($save) {
            return back()->with('Inscription avec succes !');
        } else {
            return back()->with('Erreur, un probleme est survenu !');
        }
    }

    public function userConnexion(Request $request) {
        $request->validate([
            'user_name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
    }

}
