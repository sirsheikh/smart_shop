@extends('layout.nav')
@section('title','Add Products')
@section('content')
<div class="row">
	
	<div class="col-lg-6 offset-md-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3>Add New Product</h3>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('SaveProduct')}}" method="post" role="form">
                            	@csrf
                                <input type="hidden" name="brand_id" value="1">
                                <input type="hidden" name="unit_id" value="1">
                                <div class="form-group"><label>Product Name</label> 
                                	<input type="text" name="name" placeholder="Enter Product Name" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group"><label>Product Code</label> 
                                    <input type="text" name="code" placeholder="Enter Product Code" class="form-control" required autocomplete="off">
                                </div>
                                <div class="form-group"><label>Product Details</label> 
                                    <textarea type="text" required name="product_details"  class="form-control" required autocomplete="off"></textarea>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                         <div class="form-group">
                                            <label>Product Barcode</label> 
                                            <input type="text" name="barcode_symbology" placeholder="Enter Product Barcode" required class="form-control" autocomplete="off"> 
                                         </div>
                                    </div>
                                   
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="col-sm-12">&nbsp;</label> 
                                             <button id="genbutton" class="btn btn-info btn-circle" type="button" data-toggle="tooltip" data-placement="right" title="Generate Barcode"><i class="fa fa-spinner"></i>
                                        </button>
                                         </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Catagory</label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                        @foreach($ProductCatagory as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option> 
                                        @endforeach                                 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Variants</label>
                                    <select id="variant_id" name="variant_id" class="form-control" required>
                                        @foreach($Productvariants as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option> 
                                        @endforeach                                 
                                    </select>
                                </div>

                                <div class="form-group">
                                	<label>Status</label>
                                	<select id="is_active" name="is_active" class="form-control" required>
                                		<option value="1">Active</option>
                                		<option value="0">Inactive</option>
                                	</select>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-sm btn-warning  m-t-n-xs btn-rounded" type=""><strong>Back</strong></button>
                                    <button class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" type="submit"><strong>Save</strong></button>
                                    
                                </div>
                            </form>
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
        $('#genbutton').on("click", function(){
           var currentTimeInSeconds=Math.floor(Date.now()/1000);
            $("input[name='barcode_symbology']").val(currentTimeInSeconds);
        });
    });
</script>

@endsection