<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [SignupController::class, 'inscription']);

Route::get('/connexion', [SignupController::class, 'connexion']);
Route::get('/organize', function () 
{
    return view('organizeEvent');
});
