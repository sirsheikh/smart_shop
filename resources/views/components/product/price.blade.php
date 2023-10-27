@extends('layout.nav')
@section('title','Stock Entry')
@section('content')
<div class="row">
	
	<div class="col-lg-6 offset-md-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3>Stock Entry Form</h3>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('SaveStock')}}" method="post" role="form">
                            	@csrf
                                <input type="hidden" name="brand_id" value="1">
                                <input type="hidden" name="unit_id" value="1">
                                <div class="form-group">
                                    <label>Products</label>
                                    <select id="product_id" name="product_id" class="form-control" required>
                                        <option disabled selected >Select Product</option> 
                                        @foreach($Products as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option> 
                                        @endforeach                                 
                                    </select>
                                </div>
                            <div id="productsDetails">
                                <div class="form-group"><label>Product Code</label> 
                                    <input type="text" id="code" name="code" placeholder="Enter Product Code" class="form-control" required readonly autocomplete="off">
                                </div>
                                <div class="form-group"><label>Product Details</label> 
                                    <textarea type="text" id="product_details" required name="product_details"  class="form-control" required readonly autocomplete="off"></textarea>
                                    
                                </div>
                                <div class="form-group">
                                            <label>Product Barcode</label> 
                                            <input type="text" id="barcode_symbology" name="barcode_symbology" placeholder="Enter Product Barcode" required readonly class="form-control" autocomplete="off"> 
                                </div>
                                <div class="form-group">
                                    <label>Product Variants</label>
                                    <select id="variant_id" name="variant_id" class="form-control" required>
                                        
                                        <option value="">$v->name</option> 
                                                                       
                                    </select>
                                </div>

                                
                                <div class="float-right">
                                    <button class="btn btn-sm btn-warning  m-t-n-xs btn-rounded" type=""><strong>Back</strong></button>
                                    <button class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" type="submit"><strong>Save</strong></button>
                                    
                                </div>
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
        $('#StockMenu').addClass('active');
        $('#Receiveproduct').addClass('active');
        document.getElementById('productsDetails').style.display='none';
    });
    $('#product_id').on('change',function(){
        var id=document.getElementById('product_id').value;
        $.ajax({
            type:'get',
            url:"{{route('getProductInfo')}}",
            data:{id},
            success:function(data){
              var v=JSON.parse(JSON.stringify(data));
              document.getElementById('productsDetails').style.display='block';
              document.getElementById('code').value=v[0].code;
              document.getElementById('product_details').value=v[0].product_details;
              document.getElementById('barcode_symbology').value=v[0].barcode_symbology;
           }
        });

        
    });
</script>

@endsection