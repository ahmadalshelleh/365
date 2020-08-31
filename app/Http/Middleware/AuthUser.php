<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class AuthUser
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
        $token = $request->header('auth');
        $checker = User::findOrFail($request['id']);
        if($token == $checker->email){
            return $next($request);
        }
        return response()->json(['message'=>'not same'], 401);
    }
}
