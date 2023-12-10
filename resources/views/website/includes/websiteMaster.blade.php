<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>@yield('title','')</title>
	@include('website.includes.head')

</head>
<body id="" >
	<div class="">
		<!-- initiate header-->
		@include('website.includes.header')
		<div class="">
			<!-- initiate sidebar-->
			<div class="">
				
				<!-- yeild contents here -->
				
				@yield('content')
			</div>
			@include('website.includes.footer')


		</div>
	</div>

	@include('website.includes.scripts')	
	@include('website.includes.message')
</body>
</html>