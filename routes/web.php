<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data=[
        'descrizione' => 'Questa è una prova per la visualizzazione dinamica in Home'
    ];
    return view('home', $data);
});

Route::get('/about_me', function () {
    $data=[
        'descrizione' => 'Non mi contattate, mi piace stare da solo e tranquillo'
    ];
    return view('about_me', $data);
});

Route::get('/contacts', function () {
    $data=[
        'descrizione' => 'Non avete letto "About me?" Forse dovresti farlo :'
    ];
    return view('contacts', $data);
});

Route::get('/products', function () {
    $data=[
        'descrizione' => 'Cosa ti fa credere che abbia dei prodotti da vendere? Sciò.'
    ];
    return view('products', $data);
});