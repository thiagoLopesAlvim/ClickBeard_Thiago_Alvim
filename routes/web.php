<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Rota pública de login
Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rota para registro de usuário (se aplicável)
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register');

// Rota para agendamento
Route::get('/agendamento', function () {
    $especialidades = \App\Models\Especialidade::all();
    return view('agendamento', compact('especialidades'));
})->middleware('auth');

// Rotas para agendar e buscar barbeiros
Route::post('/agendar', [AgendamentoController::class, 'store'])->middleware('auth');
Route::get('/barbeiros/{especialidade}', [AgendamentoController::class, 'getBarbeirosPorEspecialidade'])->middleware('auth');

// Rotas administrativas protegidas pelo middleware checkadmin
Route::middleware(['auth', 'checkadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Outras rotas administrativas podem ser adicionadas aqui
});
