<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        $currentUser=auth()->user();
        if($currentUser->admin){
            return $next($request);
        }
       else{
           return redirect('admin_n.index');
       }
    }
}
