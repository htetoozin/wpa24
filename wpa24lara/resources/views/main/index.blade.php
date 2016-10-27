<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<title>{{ $site_title }}</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>{{ $title }}</h1> <!-- echo $title; -->
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>ID</th>
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
		new Vue({
			el : ".container",
			data: {

			}
		});
	</script>
</body>
</html>