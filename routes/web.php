<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome',['welcome'=> 'Benvenuto nel mio Blog']);
})->name("welcome");

Route::get('/contatti', function () {
    return view('pages.contacts');
})->name("contacts");

Route::get('/chisono', function () {
    return view('pages.chisono', [
        'title' => 'Sara Maraghelli',
        'description' => 'Ciao, mi chiamo Sara, ho 33 anni, vengo da Pistoia, al momento lavoro nell ambito della ristorazione e mi occupo di faccende domestiche',
    ]);
})->name('aboutme');

Route::get('/articoli', function () {

    $articles =[
        
           [ 'title'=> 'Rolling Stones', 'description' => '....','category'=> ''],
           [ 'title'=> 'Beatles', 'description' => '....','category'=> ''],
           [ 'title'=> 'L enorme differenza ', 'description' => '....', 'category'=>''],
    ];
    return view('pages.articles', ['articles' => $articles]);
})->name("articles");

Route::get('/articolo/{article}', function($article){

    $index=$article;

    $articles =[
        
        [ 'title'=> 'Rolling Stones', 'description' => '....','category'=> ''],
        [ 'title'=> 'Beatles', 'description' => '....','category'=> ''],
        [ 'title'=> 'L enorme differenza ', 'description' => '....', 'category'=>''],
 ];
    if(array_key_exists($index, $articles)){
        return view('pages.article', ['article' => $articles[$index]]);
    }else{
     abort(404);
    }
    

})->name('article');