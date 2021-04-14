<?php

namespace App\Http\Middleware;

use Closure, Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       if(Auth::check(['id'])){
        return $next($request);
    }
       else
        return redirect('login');
    
    
  }
}
