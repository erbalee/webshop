@extends ('admin.layouts.adminmaster')

@section ('content')
	@foreach($news as $new)
		{{$new->id}}
		{{$new->title}}
	 	{{$new->body}}
		<br />
	@endforeach
@endsection