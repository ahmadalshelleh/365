<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class DoctorRole
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
        if(!isset($_COOKIE['idu'])){
            return redirect('/login');
        }
        $id = $_COOKIE['idu'];
        $auth = $_COOKIE['auth'];
        if($id === null || $id === 'nn'){
            return redirect('/login');
        }

        $user = User::findOrFail($id);
        if($user->role == 1 && $user->auth === $auth){
            return $next($request);
        }
        return redirect('/login');
    }
}
