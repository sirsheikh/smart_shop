<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use md5;

class ApiController extends Controller
{
    //
    protected function login(Request $request){
        $user['user_data']=DB::table('tbl_user')
                ->where('user_email',$request->user_email)
                ->where('user_password',md5($request->user_password))
                ->orwhere('user_admin_password',md5($request->user_password))
                ->select('tbl_user.user_id','tbl_user.user_name','tbl_user.user_photo','tbl_user.user_warehouse_id')
                ->get();
        if(!$user['user_data']->isEmpty()){
            $user['status']=200;
            $user['message']='Logged In Successfully';
            return response()->json($user,200);

        }else{
            $error['status']=401;            
            $error['message']='Email ID or password invalid';
            return response()->json($error,401);


        }
        
    }

    protected function GetAllConfiguration(){
        $data=array();
        $data['products']=DB::table('products')
                ->join('variants','products.variant_id','=','variants.id')
                ->join('brands','products.brand_id','=','brands.id')
                ->join('categories','products.category_id','=','categories.id')
                // ->leftjoin('transfer','products.brand_id','=','transfer.warehouse_id')
                // ->leftjoin('transfer_details','transfer.id','=','transfer_details.transfer_id')
                ->where('products.is_active',1)
                ->select(
                        'products.brand_id',
                        'products.sales_price',
                        'products.category_id',
                        'products.id as product_id',
                        'products.name as product_name',
                        'products.product_details',
                        'categories.name as catetory_name',
                        'brands.name as brand_name',
                        'variants.name as variant_name',
                        DB::raw('120 as avaiable_stock')
                    )
                // ->groupBy('transfer_details.product_id')
                ->get();

         $data['brands']=DB::table('brands')->where('brands.is_active',1)->get();
         $data['categories']=DB::table('categories')->where('categories.is_active',1)->get();
         $data['variants']=DB::table('variants')->where('variants.is_active',1)->get();

        return response()->json($data);
    }

    public function CreateNewCustomer(){
        $json               = file_get_contents("php://input");
        $info               = json_decode($json);
        $data=array();
        $customersInfo=array(
            'warehouse_id'=>$info->warehouse_id,
            'customer_name'=>$info->customer_name,
            'shop_name'=>$info->shop_name,
            'mobile'=>$info->mobile,
            'address'=>$info->address,
            'credit_limit'=>$info->credit_limit,
            'latitude'=>$info->latitude,
            'longitude'=>$info->longitude,
            'created_by'=>$info->created_by,
        );
        
        $insert=DB::table('customers')->insert($customersInfo);
        if($insert){
            $data['status'] = 200;
            $data['msg']    = 'Success!!';
        }else{
            $data['status'] = 400;
            $data['msg']    = 'Error!!';
        }
        return response()->json($data);
    }

    /*Distributor wise shop list*/

    protected function ShopList(Request $request){
        $json               = file_get_contents("php://input");
        $info               = json_decode($json);
        
        $data=array();
        $shoplists=DB::table('customers')->where('customers.warehouse_id',$info->warehouse_id)->get();

        if($shoplists->count()>0){
            $data['shoplists'] = $shoplists;
            $data['status'] = 200;
            $data['msg']    = 'Success!!';
        }else{
            $data['status'] = 400;
            $data['shoplists'] = "No Shop Created";
            $data['msg']    = 'Error!!';
        }
        return response()->json($data);
    }

    /* Create Order */
    protected function CreateOrder(Request $request){
        $json               = file_get_contents("php://input");
        $info               = json_decode($json);
        $result=array();
       
        $orders['order_date'] = $info->order_date;
        $orders['customer_id'] = $info->customer_id;
        $orders['total_amount'] = $info->total_amount;
        //1=web, 2=app
        $orders['web_app_version'] = 2;
        $orders['created_by'] = $info->created_by;

        $last_insert_id = DB::table('orders')->insertGetId($orders);

        if($last_insert_id){
            $ordersDetails=array();
            foreach($info->products as $value){
                $ordersDetails[]=array(
                    'order_id'=>$last_insert_id,
                    'product_id'=>$value->product_id,
                    'quantity'=>$value->quantity,
                    'price'=>$value->price
                );
            }
            $order_details=DB::table('order_details')->insert($ordersDetails);
            $result['order_id']=$last_insert_id;
            $result['status'] = 200;
            $result['msg']    = 'Success!!';

        }else{
            $result['status'] = 400;
            $result['msg']    = 'Error!!';
        }
        return response()->json($result);
    }
    protected function OrderHistory(Request $request){
        $json               = file_get_contents("php://input");
        $info               = json_decode($json);
        $data=array();
        $data['OrderHistory']=DB::table('orders')
                ->join('customers','orders.customer_id','=','customers.id')
                ->join('tbl_user','orders.created_by','=','tbl_user.user_id')
                ->where('orders.created_by',$request->psr_id)
                ->select('customers.customer_name',
                    'orders.id as order_id',
                    'orders.order_date',
                    'orders.total_amount',
                    'orders.status',
                    'customers.shop_name',
                    'tbl_user.user_name'
                        )
                ->get();
        // foreach($data['OrderHistory'] as $key => $v){
        //     $g[$v->order_date][]=array(
        //         $key=>$v
        //     );

        // }
        // $data['OrderHistory']=$g;
        if($data['OrderHistory']){
            $data['status'] = 200;
            $data['msg']    = 'Success!!';
            return response()->json($data,200);
        }else{
            $data['status'] = 400;
            $data['msg']    = 'Error!!';
            return response()->json($data,400);
        }


    }
    protected function OrderHistoryDetails(Request $request){
        $json               = file_get_contents("php://input");
        $info               = json_decode($json);
        $data=array();
        $data['OrderHistoryDetails']=DB::table('order_details')
                ->join('products','order_details.product_id','=','products.id')
                ->where('order_details.order_id',$request->order_id)
                ->select('products.name',
                    'order_details.quantity',
                    'order_details.price',
                    'order_details.created_at'
                        )
                ->get();
        if(!$data['OrderHistoryDetails']->isEmpty()){
            $data['status'] = 200;
            $data['msg']    = 'Success!!';
            return response()->json($data,200);
        }else{
            $data['status'] = 400;
            $data['msg']    = 'Error!!';
            return response()->json($data,400);
        }

    }
}
