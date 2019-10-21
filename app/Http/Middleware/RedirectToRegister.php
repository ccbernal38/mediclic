<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToRegister
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
        if (auth()->user()->estado_registro == 0){
            return redirect('usuario/register_complete');
        }
        return $next($request);
    }
}
