@extends('website.includes.websiteMaster')
@section('title', 'IUB Souvenir Shop | Contact Us')
@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="container mt-5">
    <h1 class="text-center">Contact Us</h1>
    <p>Please fill out the form below to get in touch with us.</p>
    <form action="{{route('contactUSsave')}}" method="post">
    	@csrf
      <div class="form-group">
        <label for="contact_name">Your Name:</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" required>
      </div>

      <div class="form-group">
        <label for="contact_phone">Your Phone Number:</label>
        <input type="text" class="form-control" id="contact_phone" name="contact_phone" required>
      </div>

      <div class="form-group">
        <label for="contact_email">Your Email:</label>
        <input type="email" class="form-control" id="contact_email" name="contact_email" required>
      </div>

      <div class="form-group">
        <label for="message">Type Your Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>

      <div class="form-group text-center">
      <button type="submit" class="btn btn-primary">Submit Message</button>
      </div>
    </form>
  </div>
		
	</div>
	
</div>

@endsection