<?php

namespace App\Http\Middleware;
use Closure;
use DB;
use Redirect;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // $valid=DB::table('tbl_user')->where('tbl_user.user_email',$request->user_name)->where('tbl_user.user_password',md5($request->user_password))->orwhere('tbl_user.user_admin_password',md5($request->user_password))->get();
        
        // if(!$valid->isEmpty())
        // {

        //  return redirect('/dashboard');           

        // }
        // else{
        //     return redirect('/');

        }
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }


        return $next($request);
    }
}
