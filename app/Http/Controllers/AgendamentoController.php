<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Barbeiro;
use App\Models\Especialidade;

class AgendamentoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'barbeiro_id' => 'required|exists:barbeiros,id',
            'especialidade_id' => 'required|exists:especialidades,id',
            'data_hora' => 'required|date',
        ]);

        Agendamento::create($validated);

        return redirect()->back()->with('success', 'Agendamento realizado com sucesso!');
    }

    public function getBarbeirosPorEspecialidade($especialidade)
    {
        $barbeiros = Barbeiro::whereHas('especialidades', function ($query) use ($especialidade) {
            $query->where('nome', $especialidade);
        })->get();

        return response()->json($barbeiros);
    }
}
