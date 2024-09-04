<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function barbeiros()
    {
        return $this->belongsToMany(Barbeiro::class, 'barbeiro_especialidade');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
