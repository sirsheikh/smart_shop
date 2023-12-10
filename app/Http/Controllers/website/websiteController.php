<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class websiteController extends Controller
{
    public function index(){
        return view('website.homePage');
        dd('ok');
    }
    public function contactUS(){
        return view('website.contact_form');
    }
    public function contactUSsave(Request $request){
        if(DB::table('contact_us')->insert($request->except('_token'))){
            Session::put('success','Data Saved Successfully');
        }else{
            Session::put('error','Something Went Wrong! Please Try again'); 
        }
        return redirect('/');
    }

}
