<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barbeiro extends Model
{
    protected $fillable = [
        'name',
        'idade',
        'data_contratacao',
    ];

    public function especialidades()
    {
        return $this->belongsToMany(Especialidade::class, 'barbeiro_especialidade');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    }
}
