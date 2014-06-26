@extends(theme_path('layout'))

@section('title')
	{{ ucfirst($tag) }} | 
@stop

@section('bodyclass')
categoryview
@stop

@section('content')
	<section>
		@if (isset($tag))
			
		@else
			<h2 class="title">Archives</h2>
		@endif

		@foreach ($posts as $post)
			@include(theme_path('inc.post'))
		@endforeach

		{{ $posts->links() }}

	</section>
@stop
