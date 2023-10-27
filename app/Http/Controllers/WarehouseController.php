<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    protected function index(){
        $data=DB::table('warehouses')
                ->leftjoin(DB::raw('warehouses as Bware'),'warehouses.company_id','=','Bware.id')
                ->select('warehouses.name',DB::raw('Bware.name as Parent_Name'))
                ->get();
        return view('components.warehouse.Warehouse',get_defined_vars());
    }
    protected function AddWarehouse(){
        $warehouse=DB::table('warehouses')->get();
        return view('components.warehouse.WarehouseEntry',get_defined_vars());

    }
    protected function SaveWarehouse(Request $request){
        $insert=DB::table('warehouses')->insert($request->except('_token'));
        return redirect('/Warehouse');
    }
    protected function ProductTransfer(){
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
        return view('components.warehouse.ProductTransfer',get_defined_vars());
    }
    protected function Transfer(){
        $Products=DB::table('products')
                    ->join('variants','products.variant_id','=','variants.id')
                    ->where('products.is_active',1)
                    ->select('products.*',DB::raw('variants.name as Vname'))
                    ->get();
        $invoice=DB::table('stock')
                    ->where('stock.is_active',1)
                    ->select(DB::raw('COUNT(stock.id)+1 as invoice'))
                    ->get();
        $distributor=DB::table('warehouses')->where('warehouses.id','!=',1)->get();
        $Units=DB::table('units')->where('units.is_active',1)->get();
        return view('components.warehouse.ProductList',get_defined_vars());
    }
    protected function SaveTransfer(Request $request){
        $transfer=array(
            'warehouse_id'=>$request->warehouse_id,
            'invoice_id'=>$request->invoice_id,
            'challan_no'=>$request->challan_no,
            'date'=>$request->date
        );
        $id=DB::table('transfer')->insertGetId($transfer);
        for($i=0;$i<count($request->product_id);$i++){
            $transferDetail[]=array(
                'transfer_id'=>$id,
                'product_id'=>$request->product_id[$i],
                'qty'=>$request->qty[$i],
                'rate'=>$request->rate[$i]
            );
        }
        $id=DB::table('transfer_details')->insert($transferDetail);
        return redirect('/ProductTransfer');
    }
    protected function WarehouseStock(){
        $data=DB::table('transfer')
                    ->join('warehouses','transfer.warehouse_id','=','warehouses.id')
                    ->leftjoin('transfer_details','transfer.id','=','transfer_details.transfer_id')
                    ->join('products','transfer_details.product_id','=','products.id')
                    ->select('warehouses.name',
                        'transfer.invoice_id',
                        'transfer.challan_no',
                        'transfer.date',
                        DB::raw('products.name as product_name'),
                        'transfer_details.qty'

                    )
                    ->get();
        // dd($data);
        return view('components.warehouseWiseStock.WarehouseStock',get_defined_vars());
    }

}
