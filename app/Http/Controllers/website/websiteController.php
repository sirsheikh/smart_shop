<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
        return view('website.homePage');
        dd('ok');
    }
}
