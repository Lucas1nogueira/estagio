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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/any', function() {
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['put', 'delete'], '/match', function() {
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{categoria?}', function($id, $categoria = 'Nenhum') {
    return "O id do produto é: ".$id."<br>Categoria: ".$categoria;
});

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

Route::get('/news', function() {
    return view('news');
})->name('noticias');

Route::get('/novidades', function() {
    return redirect()->route('noticias');
});