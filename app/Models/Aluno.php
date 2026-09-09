<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'curso',
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
