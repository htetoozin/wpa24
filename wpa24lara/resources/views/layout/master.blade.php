<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Listing</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('css/summernote.css') }}">

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/summernote.min.js') }}"></script>
	<script src="{{ asset('js/sweetalert.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
	<div class="container">	
		@include('Alerts::show')
		<div class="row">
			<div class="col-md-12">
				@yield("content")
			</div>
		</div>
	</div>
</body>
</html>