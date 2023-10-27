@extends('layout.nav')
@section('title','Orders')
@section('content')
<div class="row">
    
    <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span style="font-size:18px">Customers</span>
                    <div class="float-right">
                    <!-- <a class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" href="{{route('Transfer')}}">Transfer</a> -->

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
                    <tr role="row" class="text-center">
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Browser: activate to sort column descending" style="width: 281.156px;">Zone</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 346.344px;">Customer Name</th>                        
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173.906px;">Shop Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312.031px;">Mobile</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312.031px;">Address</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312.031px;">Credit Limit</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312.031px;">Shop Added By</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 173.906px;">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($data as $v)
                        <tr>                           
                            <td>{{$v->name}}</td>
                            <td>{{$v->customer_name}}</td>
                            <td>{{$v->shop_name}}</td>
                            <td>{{$v->mobile}}</td>
                            <td>{{$v->address}}</td>
                            <td>{{$v->credit_limit}}</td>
                            <td>{{$v->user_name}}</td>
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
        $('#Customer').addClass('active');
        $('#CustomerList').addClass('active');
        // $('#genbutton').on("click", function(){
        //    var currentTimeInSeconds=Math.floor(Date.now()/1000);
        //     $("input[name='barcode_symbology']").val(currentTimeInSeconds);
        // });
    });
</script>

@endsection