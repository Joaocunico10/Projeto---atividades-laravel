<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;

class Professor extends Model
{
    protected $table = 'professores';

    protected $fillable = [
        'nome',
        'especialidade',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
