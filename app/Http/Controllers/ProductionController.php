<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    protected function index(){
        $data=DB::table('production')
                    ->join('products','production.product_id','=','products.id')
                    ->join('variants','products.variant_id','=','variants.id')
                    ->select(DB::raw('products.name as product_name'),
                        DB::raw('variants.name as variants_name'),
                        'production.ProductionDate',
                        'production.ExpiryDate',
                        'production.qty',
                        'production.Batch_Number')
                    ->get();
        return view('components.production.Production',get_defined_vars());

    }
    protected function AddProduction(){
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
        return view('components.production.ProductionEntry',get_defined_vars());

    }
    protected function SaveProduction(Request $request){
        $data=array();
        for($i=0;$i<count($request->product_id);$i++){
            $data[]=array(
                'product_id'=>$request->product_id[$i],
                'Batch_Number'=>$request->Batch_Number[$i],
                'ProductionDate'=>$request->ProductionDate[$i],
                'ExpiryDate'=>$request->ExpiryDate[$i],
                'qty'=>$request->total[$i]
            );

        }
    
        $insert=DB::table('production')->insert($data);
        return redirect('/Production');
        
    }
}
