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
				<table class="table table-stripped">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="student in students">
							<td>@{{ student.id }}</td>
							<td>@{{ student.name }}</td>
							<td>@{{ student.address }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script>
		new Vue({
			el: ".container",
			data: {
				students:{!! $students !!}
			}
		});
	</script>
</body>
</html>