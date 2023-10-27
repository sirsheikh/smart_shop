<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    protected function index(){
        $data=DB::table('customers')
                ->join('tbl_user','customers.created_by','=','tbl_user.user_id')
                ->join('warehouses','customers.warehouse_id','=','warehouses.id')
                ->select(
                    'customers.customer_name',
                    'customers.shop_name',
                    'customers.mobile',
                    'customers.address',
                    'customers.credit_limit',
                    'tbl_user.user_name',
                    'warehouses.name'
            )
                ->get();
        return view('components.customer.customer',get_defined_vars());
    }
}
