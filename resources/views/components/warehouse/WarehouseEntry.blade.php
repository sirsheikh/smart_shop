@extends('layout.nav')
@section('title','Add Warehouse')
@section('content')
<div class="row">
    
    <div class="col-lg-6 offset-md-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3>Add Warehouse</h3>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('SaveWarehouse')}}" method="post" role="form">
                                @csrf
                                <div class="form-group"><label>Warehouse Name</label> 
                                    <input type="text" name="name" placeholder="Enter Warehouse Name" class="form-control">
                                </div>

                                 <div class="form-group"><label>Parent Warehouse</label> 
                                    <select class="form-control" name="company_id">
                                        @foreach($warehouse as $v)
                                        <option value="{{$v->id}}">{{$v->name}}</option>
                                        @endforeach
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
    $('#WarehouseMenu').addClass('active');
    $('#Warehouse').addClass('active');
});
</script>

@endsection