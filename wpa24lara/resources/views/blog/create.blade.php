@extends("layout.master")
@section("content")
	<form action="{{ route('blogs.store') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Blog Title</label>
			<br />
			@if($errors->has('title'))
				<label class="text-danger" for="title"><small>{{ $errors->first('title') }}</small></label>
			@endif
			<input class="form-control" type="text" name="title" value="{{ old('title') }}" />
		</div>
		<div class="form-group">
			<label for="body">Blog Body</label>
			<br />
			@if($errors->has('body'))
				<label class="text-danger" for="body"><small>{{ $errors->first('body') }}</small></label>
			@endif
			<textarea id="summernote" name="body" class="form-control">{{ old('body') }}</textarea>
		</div>
		 <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection