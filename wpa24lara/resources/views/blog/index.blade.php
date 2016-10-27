@extends("layout.master")
@section("content")
				<br>
				<br>
				<a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New Blog</a>
				<br>
				<br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Action</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($blogs as $blog)
						<tr>
							<td>{{ $blog->id }}</td>
							<td> <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></td>
							<td><a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a></td>
							<td>
								<form action="{{ route('blogs.destroy', $blog->id)}}" method="post" }}>
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $blogs->render() }}
@endsection		