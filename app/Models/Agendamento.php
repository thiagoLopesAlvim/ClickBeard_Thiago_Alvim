<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'cliente_id',
        'barbeiro_id',
        'especialidade_id',
        'data_hora',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function barbeiro()
    {
        return $this->belongsTo(Barbeiro::class);
    }

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }
}
