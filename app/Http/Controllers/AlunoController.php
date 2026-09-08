<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show($id)
    {
        return 'Aluno: ' . $id;
    }

    public function create()
    {
        return 'Formulário de cadastro';
    }

    public function store()
    {
        return 'Cadastrando aluno';
    }

    public function edit($id)
    {
        return 'Editando aluno';
    }

    public function update($id)
    {
        return 'Atualizando aluno';
    }

    public function destroy($id)
    {
        return 'Excluindo aluno';
    }

}
