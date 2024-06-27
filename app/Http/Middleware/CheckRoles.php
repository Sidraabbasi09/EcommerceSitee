<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if()
        $user = auth()->user();
        $role_id = $user->roles()->pluck('id')->first();
        //1 for buyer , 2 for seller
        // dd($user->roles()->pluck('id')->first());
        // if($role_id == 2){
        //     return $next($request);
        // }else{
        //     return redirect('/');   
        // }
        if($role_id == 2){
            return redirect('/');  
            
        }else{
            return $next($request);
        }
    }
}
