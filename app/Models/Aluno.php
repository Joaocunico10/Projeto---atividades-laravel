<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;
use App\Models\User;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
