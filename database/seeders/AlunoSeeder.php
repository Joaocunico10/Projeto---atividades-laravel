<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluno::create([
            'nome' => 'Joao',
            'curso' => 'Engenharia de Software',
        ]);
        Aluno::create([
            'nome' => 'Pedro',
            'curso' => 'Psicologia',
        ]);
        Aluno::create([
            'nome' => 'Maria',
            'curso' => 'Medicina',
        ]);
        Aluno::create([
            'nome' => 'Eduarda',
            'curso' => 'Fisioterapia',
        ]);
        Aluno::create([
            'nome' => 'Carlos',
            'curso' => 'Contabilidade',
        ]);
        Aluno::create([
            'nome' => 'Gustavo',
            'curso' => 'Administracao',
        ]);
        Aluno::create([
            'nome' => 'Mario',
            'curso' => 'Administracao',
        ]);
        Aluno::create([
            'nome' => 'Luis',
            'curso' => 'Engenharia de Software',
        ]);
        Aluno::create([
            'nome' => 'Eduardo',
            'curso' => 'Biomedicina',
        ]);
        Aluno::create([
            'nome' => 'Ana',
            'curso' => 'Enfermagem',
        ]);
    }
}
