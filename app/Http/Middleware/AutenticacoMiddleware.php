<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session_start();

        if (isset($_SESSION['id']) &&  $_SESSION['id'] != '' && $_SESSION['funcionario'] == 1) {

            return $next($request);


        } else {

            return redirect()->route('cliente.login', ['error' => 1]);
        }
    }
}
