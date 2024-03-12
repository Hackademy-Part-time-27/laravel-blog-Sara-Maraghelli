<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contacts');
});

Route::get('/chisono', function () {
    return view('chisono', [
        'title' => 'Sara Maraghelli',
        'description' => 'Ciao, mi chiamo Sara, ho 33 anni, vengo da Pistoia, al momento lavoro nell ambito della ristorazione e mi occupo di faccende domestiche',
    ]);
});