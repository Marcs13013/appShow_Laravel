<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblEventosController;

//para visualisar as paginas

Route::get('/',[TblEventosController::class,'MostrarHome'])->name('home-adm');

Route::get('/cadastro-evento',[TblEventosController::class,'MostrarCadastroEvento'])->name('show-cadastro-evento');
Route::get('/lista-evento',[TblEventosController::class,'MostrarEventoNome'])->name('lista-evento');
Route::get('/alterar-evento/{id}',[TblEventosController::class,'MostrarEventoCodigo'])->name('show-altera-evento');

//para cadastrar
Route::post('/cadastro-evento',[TblEventosController::class,'CadastroEventos'])->name('cadastra-evento');

//para deeletar
Route::delete('/apaga-evento/{id}',[TblEventosController::class,'Destroy'])->name('apaga-evento');


//alterar
Route::put('/altera-evento/{id}',[TblEventosController::class,'Update'])->name('altera-evento');

