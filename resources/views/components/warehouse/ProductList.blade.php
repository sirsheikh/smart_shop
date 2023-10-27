@extends('layout.nav')
@section('title','Stock Entry')
@section('content')
<div class="row">
	
	<div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3>Stock Entry Form</h3>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('SaveTransfer')}}" method="post" role="form">
                            	@csrf
                                
                            <div class="row">
                                <div class="form-group col-lg-2">
                                    <label>Invoice No.</label>
                                    <input type="text" class="form-control" required readonly name="invoice_id" id="invoice_id" value="{{$invoice[0]->invoice}}">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label>Challan No.<span style="color: red;"> *</span></label>
                                    <input type="text" class="form-control" required  name="challan_no" id="challan_no">
                                </div>
                                <div class="col-lg-2">
                                    <label>Invoice Date<span style="color: red;"> *</span></label>
                                    <input required type="date" class="form-control" name="date" id="date">
                                </div>
                                <div class="col-lg-2">
                                    <label>Select Distributor<span style="color: red;"> *</span></label>
                                    <select class="form-control" name="warehouse_id" id="warehouse_id">
                                        @foreach($distributor as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <hr>

                         <div class="row">
                            <div class="table-responsive">
                                <table id="product_info_table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:15%;">Select Product</th>
                                            <th style="width:15%;">Product Code</th>
                                            <th style="width:15%;">Avaiable Qty</th>
                                            <th style="width:15%;">Rate</th>
                                            <th style="width:15%;">Qty</th>
                                            <th style="width:15%;">Total</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr> 
                                            <td>
                                                 <select  id="product_1" name="product_id[]" class="form-control" onchange="getProductInfo(1)" required>
                                                    <option disabled selected >Select Product</option> 
                                                    @foreach($Products as $v)
                                                    <option value="{{$v->id}}">{{$v->name}} {{ $v->Vname}}</option> 
                                                    @endforeach                                 
                                                </select>
                                            </td>
                                            <td>
                                                 <input type="text" id="code_1" placeholder="Product Code" class="form-control" required readonly autocomplete="off">
                                            </td>
                                            <td>
                                                <input type="text" id="codeQ_1" placeholder="Product Qty" class="form-control" required readonly autocomplete="off">
                                            </td>
                                            
                                             <td>
                                                 <input type="number" min="1"  id="rate_1" name="rate[]" placeholder="Enter Product Rate" class="form-control" required  autocomplete="off">
                                            </td>
                                            <td>
                                                 <input type="number" min="1" id="qty_1" name="qty[]" placeholder="Enter Product Qty" class="form-control" required  autocomplete="off">
                                            </td>
                                             <td>
                                                 <input type="text" id="total_1" name="total[]" class="form-control" required  autocomplete="off" readonly>
                                            </td>
                                            <!-- <td>
                                                 <button class="btn btn-danger remove"><i class="fa fa-trash-o"></i></button>
                                            </td> -->
                                        </tr>
                                        <tfoot>
                                            <td colspan="6"></td>
                                            <td style="text-align: center;"><button type="button" class="btn btn-success" id="add_row"><i class="fa fa-plus"></i></button></td>
                                        </tfoot>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                            <button class="btn btn-primary dim pull-right" type="submit"><i class="fa fa-check"></i> Submit</button>
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
	
</div>
<script >
	$( document ).ready(function() {
        $('#WarehouseMenu').addClass('active');
        $('#ProductList').addClass('active');
        
        
    });

    $(document).ready(function() {
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;
               var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product_id[]" style="width:100%;" onchange="getProductInfo('+row_id+')">'+
                        '<option >Select Product</option>';
                         @foreach($Products as $v)
                          html += '<option value="{{$v->id}}">{{$v->name}} {{$v->Vname}}</option>';   
                           @endforeach            
                       
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input readonly  placeholder="Product Code" type="text"  name="code[]" id="code_'+row_id+'" value="" class="form-control"></td>'+
                   
                    '<td>'+ 
                    '<input type="text" id="codeQ_'+row_id+'" placeholder="Product Qty" data-row-id="'+row_id+'" class="form-control" required readonly autocomplete="off">'+
                    '</td>'+ 

                    '<td><input type="number" min="1" name="rate[]" placeholder="Enter Product Rate" id="rate_'+row_id+'"  class="form-control"></td>'+
                    '<td><input type="number" min="1"  name="qty[]" placeholder="Enter Product Qty" id="qty_'+row_id+'" value="" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="total[]" id="total_'+row_id+'" readonly class="form-control" ></td>'+
                    '<td style="text-align: center;"><button type="button" class="btn btn-danger" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';
                    if(count_table_tbody_tr >= 1) {
                                  $("#product_info_table tbody tr:last").after(html);  
                    }else {
                      $("#product_info_table tbody").html(html);
                    }
          
      return false;
    });
 });





    // jQuery button click event to remove a row.
    
    function removeRow(tr_id){
        $("#product_info_table tbody tr#row_"+tr_id).remove();
        subAmount();
      }




 // get the product information from the server
  function getProductInfo(row_id) {
    var id = $("#product_"+row_id).val();
    if(id == "") {
      $("#code_"+row_id).val("");
    } else {
      $.ajax({
       type:'get',
            url:"{{route('getProductInfo')}}",
            data:{id},
            success:function(data){
                var v=JSON.parse(JSON.stringify(data));
                 console.log(data);
                 $("#code_"+row_id).val(v[0].code);
                 $("#codeQ_"+row_id).val(v[0].qty);
                 if(v[0].qty===0){
                    $("#qty_"+row_id).prop('disabled', true);
                }else{
                    $("#qty_"+row_id).prop('disabled', false);
                }
              
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }




</script>

@endsection