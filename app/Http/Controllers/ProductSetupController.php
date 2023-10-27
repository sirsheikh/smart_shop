<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductSetupController extends Controller
{
    
    protected function productAddVariant(){
        return view('components.product.variants');
    }
    protected function add_variant(Request $request){
        // dd($request->all());
        
    }
    protected function AddProduct(){
        $ProductCatagory=DB::table('categories')->where('categories.is_active',1)->get();
        $Productvariants=DB::table('variants')->where('variants.is_active',1)->get();
        return view('components.product.product',get_defined_vars());
    }

    protected function SaveProduct(Request $request){
        $dataInsert=DB::table('products')->insert($request->except('_token'));
        return redirect('viewProduct');
    }
    protected function viewProduct(Request $request){
        $ProductList=DB::table('products')
                    ->where('products.is_active',1)
                    ->join('variants','products.variant_id','=','variants.id')
                    ->select('products.*',DB::raw('variants.name as Vname'))
                    ->get();
        return view('components.product.productView',get_defined_vars());

        
    }
}
