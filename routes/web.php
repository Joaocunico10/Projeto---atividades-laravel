<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos/curso', [AlunoController::class, 'porCurso']);
Route::get('/alunos/nome', [AlunoController::class, 'porNome']);
Route::get('/alunos/recentes', [AlunoController::class, 'recentes']);
Route::get('/alunos/quantidade', [AlunoController::class, 'quantidade']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::get('/alunos/update/{id}', [AlunoController::class, 'update']);
Route::get('/alunos/destroy/{id}', [AlunoController::class, 'destroy']);

Route::post('/alunos', [AlunoController::class, 'store']);