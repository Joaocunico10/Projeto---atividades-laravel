<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return $alunos;
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);

        return $aluno;
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create([
            'nome' => $request->nome,
            'curso' => $request->curso,
        ]);
        return $aluno;
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);

        return $aluno;
    }

    public function update($id)
    {
        $aluno = Aluno::find($id);

        $aluno->update([
            'nome' => 'Carlos',
            'curso' => 'Medicina'
        ]);

        return $aluno;
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);

        $aluno->delete();

        return $aluno;
    }

    public function porCurso()
    {
        return Aluno::where('curso', 'Engenharia de Software')->get();
    }

    public function porNome()
    {
        return Aluno::where('nome', 'LIKE', '%Joao%')->get();
    }

    public function recentes()
    {
        return Aluno::orderBy('created_at', 'desc')->get();
    }

    public function quantidade()
    {
        return Aluno::count();
    }
}
