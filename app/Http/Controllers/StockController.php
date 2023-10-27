<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use json;

class StockController extends Controller
{
    //

    protected function index(){
        return view('components.stock.stockView');
    }
    protected function AddStock(){
        $Products=DB::table('products')
                    ->join('variants','products.variant_id','=','variants.id')
                    ->where('products.is_active',1)
                    ->select('products.*',DB::raw('variants.name as Vname'))
                    ->get();
        $invoice=DB::table('stock')
                    ->where('stock.is_active',1)
                    ->select(DB::raw('COUNT(stock.id)+1 as invoice'))
                    ->get();
        $Units=DB::table('units')->where('units.is_active',1)->get();
        return view('components.stock.StockEntry',get_defined_vars());
    }
    protected function getProductInfo(Request $request){
        $data=DB::table('products')
                ->join('variants','products.variant_id','=','variants.id')
                ->leftjoin('production','products.id','=','production.product_id')
                ->where('products.id',$request->id)
                ->where('products.is_active',1)
                ->select('products.*',DB::raw('variants.name as Vname'),DB::raw('COALESCE(SUM(production.qty),0) as qty'))
                ->groupBy('production.product_id')
                ->get()
                ->toarray();

        return response()->json($data);
    }
    protected function SaveStock(Request $request){
        dd($request->all());
    }
}
