<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Listing</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						@foreach($blogs as $blog)
						<tr>
							<td>{{ $blog -> id }}</td>
							<td>{{ $blog -> title }}</td>
							<td>{{ $blog -> body }}</td>
						</tr>
						@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>





