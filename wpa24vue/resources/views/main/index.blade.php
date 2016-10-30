<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1> {{ $body }}</h1>
				<button class="btn btn-danger">Click Me!</button>
			</div>
			<div class="col-md-12">
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
						<tr>
							<td>{{ $student->id }}</td>
							<td>{{ $student->name }}</td>
							<td>{{ $student->address }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script>
	</script>
</body>
</html>