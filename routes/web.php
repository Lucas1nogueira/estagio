<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::resource('produtos', ProdutoController::class);

/* ================ ROTAS E CONTROLLER ================

Route::get('/', 'App\Http\Controllers\ProdutoController@index')->name('produto.index');

Route::get('/produto/{id?}', 'App\Http\Controllers\ProdutoController@show')->name('produto.show');

*/

/* ================ ROTAS, REDIRECT, PREFIX E NAME ================

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

// Usando Route::prefix para abreviar as rotas em comum;
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', function() {
        return "dashboard";
    });
    
    Route::get('users', function() {
        return "users";
    });
    
    Route::get('clientes', function() {
        return "clientes";
    });
});

// Usando Route::name para abreviar o name da rota;
Route::name('config.')->group(function() {
    Route::get('config/user', function() {
        return "configuração de usuário";
    })->name('user');
    Route::get('config/produto', function() {
        return "configuração de produto";
    })->name('produto');
});

// Testando redirecionamento com config/user
Route::get('cnfusr', function() {
    return redirect()->route('config.user');
});

// Prefixo e name ao mesmo tempo
Route::group([
    'prefix' => 'funcionario',
    'as' => 'funcionario.'
    ], function() {
    Route::get('cadastrar', function() {
        return "cadastro de funcionário";
    })->name('cadastro');
    Route::get('editar', function() {
        return "alteração de funcionário";
    })->name('editar');
    Route::get('visualizar', function() {
        return "visualização de funcionário";
    })->name('visualizar');
    Route::get('excluir', function() {
        return "excluir funcionário";
    })->name('excluir');
});

// Teste de redirecionamento em cadastro de funcionário
Route::get('/cadfunc', function() {
    return redirect()->route('funcionario.cadastro');
});

*/
