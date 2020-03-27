<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UsuarioController;
use Closure;
use Session;

class CheckRole
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
        if ( !Auth::check() || !UsuarioController::isAdmin( Auth::user() ) ) {
           Session::flash('middleware-error','No tiene privilegios para ver esta información.');
           return redirect()->to('admin');
        }
        return $next($request);

    }
}
