<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class apiAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token=$request->bearerToken();
        $g=array();
        if($token){
            // $token='rana'.'idms'.'jahanJab';
            // $tokenHashedWeb=Hash::make('rana'.'idms'.'jahanJab');
            // Hash::check($token,$tokenHashedWeb)
            if(true){
                return $next($request);

            }else{
                $g['status']=401;
                $g['message']='Unauthorized Api Request';
                return response()->json($g,401);

            }

        }else{
            $g['status']=401;
            $g['message']='Unauthorized Api Request';
                return response()->json($g,401);
        }
        

        
    }
}
