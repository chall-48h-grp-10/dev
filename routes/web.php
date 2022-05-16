<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [SignupController::class, 'inscription']);

Route::get('/connexion', [SignupController::class, 'connexion']);

Route::get('/nav', function () {
    return view('nav');
});

Route::post('/user-inscription', [SignupController::class, 'userInscription']) -> user_name
('user-inscription');

Route::post('/user-connexion', [SignupController::class, 'userConnexion']) ->user_name
('user-connexion');