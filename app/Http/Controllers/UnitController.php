<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UnitController extends Controller
{
    protected function index(){
        $units=DB::table('units')->where('units.is_active',1)->get();
        return view('components.units.index',get_defined_vars());
    }

    protected function AddUnit(){
        $units=DB::table('units')->where('units.is_active',1)->get();
        return view('components.units.create',get_defined_vars());
    }

    protected function SaveUnit(Request $request){
        $dataInsert=DB::table('units')->insert($request->except('_token'));
        return redirect('Units');
    }
    public function contactList(){
        $contactList=DB::table('contact_us')->get();
        return view('components.contact_list',get_defined_vars());
    }
}
