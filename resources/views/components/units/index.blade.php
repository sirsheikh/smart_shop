@extends('layout.nav')
@section('title','Units')
@section('content')
<div class="row">
	<div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span>Product Units</span>
                    <div class="float-right">
                    <a class="btn btn-sm btn-primary  m-t-n-xs btn-rounded" href="{{route('AddUnit')}}">Add  Unit</a>
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
                                            <th>Unit Name</th>
                                            <th>Unit Code</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @foreach($units as $v)
                                        <tr>
                                            <td>{{$v->unit_name}}</td>
                                            <td>{{$v->unit_code}}</td>
                                            <td>{{$v->is_active}}</td>
                                            <td>
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                           
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
        $('#productUnit').addClass('active');
    });
        
</script>

@endsection