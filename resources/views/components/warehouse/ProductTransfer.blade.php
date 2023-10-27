@extends('layout.nav')
@section('title','Production')
@section('content')
<div class="row">
    
    <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span style="font-size:18px">Transfer Product</span>
                    <div class="float-right">
                    <a class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" href="{{route('Transfer')}}">Transfer</a>

                </div>
                <br>
                    
                </div>
               

                <div class="ibox-content">
                    <div class="row">
                <div class="col-lg-12">
                    
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                            </label>
                            </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Browser: activate to sort column descending" style="width: 281.156px;">Product Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 346.344px;">Product Variant</th>                        
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173.906px;">Batch Number</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312.031px;">Production Date</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 241.562px;">Expiry Date</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173.906px;">Production Quantity</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173.906px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $v)
                        <tr>                           
                            <td>{{$v->product_name}}</td>
                            <td>{{$v->variants_name}}</td>
                            <td>{{$v->Batch_Number}}</td>
                            <td>{{$v->ProductionDate}}</td>
                            <td>{{$v->ExpiryDate}}</td>
                            <td>{{$v->qty}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        
                    
                    </tbody>
                   
                    </table></div>
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
        $('#WarehouseMenu').addClass('active');
        $('#ProductList').addClass('active');
        // $('#genbutton').on("click", function(){
        //    var currentTimeInSeconds=Math.floor(Date.now()/1000);
        //     $("input[name='barcode_symbology']").val(currentTimeInSeconds);
        // });
    });
</script>

@endsection