<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    protected function index(){
        $orders=DB::table('orders')
                ->join('customers','orders.customer_id','=','customers.id')
                ->join('tbl_user','orders.created_by','=','tbl_user.user_id')
                ->where('orders.created_by',1)
                ->select(
                        'customers.customer_name',
                        'orders.id as order_id',
                        'orders.order_date',
                        'orders.total_amount',
                        'orders.status',
                        'customers.shop_name',
                        'tbl_user.user_name'
                        )
                ->get();
        $ordersDetails=DB::table('orders')
                ->join('customers','orders.customer_id','=','customers.id')
                ->join('tbl_user','orders.created_by','=','tbl_user.user_id')
                ->leftjoin('order_details','orders.id','=','order_details.order_id')
                ->join('products','order_details.product_id','=','products.id')                
                ->where('orders.created_by',1)
                ->select('customers.customer_name',
                    'orders.id as order_id',
                    'orders.order_date',
                    'orders.total_amount',
                    'orders.status',
                    'customers.shop_name',
                    'tbl_user.user_name',
                    DB::raw('products.name as product_name'),
                    DB::raw('order_details.price as product_unit_price'),
                    'order_details.quantity'
                        )
                ->get();

        $myData=array();
        foreach ($ordersDetails as $orderKey => $orderVal) {
            $myData[$orderVal->order_id]=array(
              $orderKey => $orderVal
            );

          $myData[$orderVal->order_id]['products'][]=array(
            'product_name'=>$orderVal->product_name,    
            'product_unit_price'=>$orderVal->product_unit_price,    
            'quantity'=>$orderVal->quantity,  
          );
        }
               dd($myData);
      // dd($data['OrderHistory']);
        $g=array();
        foreach($data['OrderHistory'] as $key => $v){
            $g[$v->order_id][]=array(
                 'product_name'=>$v->product_name,    
                 'product_unit_price'=>$v->product_unit_price,    
                 'quantity'=>$v->quantity,    
                
            );

        }
        dd($g);
        return view('components.orders.orders',get_defined_vars());
    }
}

