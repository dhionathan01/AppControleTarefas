<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;

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
    if(empty(auth()->user()->name)){
        return redirect()->route('login');
    }else{
        return view('bem-vindo');
    }
});
Route::get('tarefa/exportacao/{extensao}', 'App\Http\Controllers\TarefaController@exportacao')->name('tarefa.exportacao');
Route::get('tarefa/exportar/', 'App\Http\Controllers\TarefaController@exportar')->name('tarefa.exportar');
Auth::routes(['verify'=>true]);

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified'); */
Route::get('/mensagem-teste', function(){
    return new MensagemTesteMail();
   /* Mail::to('dhionathan321@gmail.com')->send(new MensagemTesteMail());
   return 'E-mail enviado com sucesso!'; */
});
Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');
