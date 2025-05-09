<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $request->headers->remove('email');
       
        $code=$request->code;
        if($code==2468){
            return $next($request);
        }
        else{
            return response()->json('invalid');


       //      return redirect('/about');
        }
        
    }
}
