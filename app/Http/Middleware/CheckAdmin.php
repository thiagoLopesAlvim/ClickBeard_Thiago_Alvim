<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e é um administrador
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // // Se a rota for a de login ou de registro, permite acesso
        // if ($request->route()->getName() === 'login' || $request->route()->getName() === 'register') {
        //     return $next($request);
        // } 
        else {
            return view('login');
        }
    }
}
