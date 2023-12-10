@extends('layout.nav')
@section('content')
@section('title','Contact Request List')
<div class="row">
	<div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <span>Contact Request List</span>
                    
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
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @foreach($contactList as $v)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$v->contact_name}}</td>
                                            <td>{{$v->contact_phone}}</td>
                                            <td>{{$v->contact_email}}</td>
                                            <td>{{$v->message}}</td>
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
        $('#contactUS').addClass('active');
    });
        
</script>
@endsection
