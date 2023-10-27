@extends('layout.nav')
@section('title','Warehouse')
@section('content')
<div class="row">
	
	<div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span style="font-size:18px">Warehouse</span>
                    <div class="float-right">
                    <a class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" href="{{route('AddWarehouse')}}">Add New Warehouse</a>

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
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Browser: activate to sort column descending" style="width: 281.156px;">Warehouse Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 346.344px;">Parent Warehouse</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $v)
                        <tr>
                            <td>{{$v->name}}</td>
                            <td>{{$v->Parent_Name}}</td>
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
        $('#Warehouse').addClass('active');
        // $('#genbutton').on("click", function(){
        //    var currentTimeInSeconds=Math.floor(Date.now()/1000);
        //     $("input[name='barcode_symbology']").val(currentTimeInSeconds);
        // });
    });
</script>

@endsection