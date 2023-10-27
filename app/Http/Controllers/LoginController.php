<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class LoginController extends Controller

{
    public function __construct(){
        // $this->Session('user_info');
    }

    protected function loginCheck(Request $request){
        $valid=DB::table('tbl_user')->where('tbl_user.user_email',$request->user_name)->where('tbl_user.user_password',md5($request->user_password))->orwhere('tbl_user.user_admin_password',md5($request->user_password))->get();
        // dd($valid);
        if(!$valid->isEmpty())
        {
            Session::put('user_info', $valid);

         return redirect('/dashboard');           

        }
        else{
            return redirect('/');

        }
    }
    protected function logout(){
        // dd('g');
        Session()->flush();
        return redirect('/');
    }
}
