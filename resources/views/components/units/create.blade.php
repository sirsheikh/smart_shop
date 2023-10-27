@extends('layout.nav')
@section('title','Add Unit')
@section('content')
<div class="row">
    
    <div class="col-lg-6 offset-md-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h3>Add Unit</h3>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{route('SaveUnit')}}" method="post" role="form">
                                @csrf
                                <div class="form-group"><label>Unit Name</label> 
                                    <input type="text" name="unit_name" placeholder="Enter Unit Name" class="form-control">
                                </div>

                                 <div class="form-group"><label>Unit Name</label> 
                                    <input type="text" name="unit_code" placeholder="Enter Unit Code" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select id="is_active" name="is_active" class="form-control">
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
    $('#productUnit').addClass('active');
});
</script>

@endsection