@extends('layout.nav')
@section('title','Products')
@section('content')
<div class="row">
	<div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span>Product List</span>
                    <div class="float-right">
                    <a class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" href="{{route('AddProduct')}}">Add New Product</a>
                </div>
                <br>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Variant</th>
                                            <th>Product Details</th>
                                            <th>Product Code</th>
                                            <th>Barcode</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @foreach($ProductList as $v)
                                        <tr>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->Vname}}</td>
                                            <td>{{$v->product_details}}</td>
                                            <td>{{$v->code}}</td>
                                            <td>{{$v->barcode_symbology}}</td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
	
</div>
<script >
	$( document ).ready(function() {
        $('#prodcutSetup').addClass('active');
        $('#product').addClass('active');
    });
        
</script>

@endsection