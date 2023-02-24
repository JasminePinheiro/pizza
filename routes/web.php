<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// base_url == localhost/pizza
Route::get('/', function () {
    return view('welcome');
});

// localhost/pizza/cardapio
Route::get('/cardapio', function () { // criando uma nova pagina
    //echo '<b>Aqui vai o cardápio da pizzaria<b>';
    return view('cardapio'); 
});

/* localhost/pizza/template
Route::get('/template', function () { // criando uma nova pagina
    //echo '<b>Aqui vai o cardápio da pizzaria<b>';
    return view('common.basic-template'); 
});*/

// localhost/pizza/home
Route::get('/home', function () { // criando uma nova pagina
    //echo '<b>Aqui vai o cardápio da pizzaria<b>';
    return view('home'); 
});
