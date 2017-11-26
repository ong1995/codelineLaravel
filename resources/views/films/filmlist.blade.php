@extends('layouts.app')

@section('title')
Film lists
@endsection

@section('content')
<div class="row">
	@foreach($data as $resources)
	@foreach($resources as $resource)
	<div class="col-md-4">
		<a  href="{{route('film', ['slug' => $resource->slug])}}"><img src="<?php echo asset("public/image/$resource->photo") ?>"></a>
		<a href="{{route('film', ['slug' => $resource->slug])}}"><h3>{{$resource->name}}</h3>
			<h4>{{$resource->release_date}}</h4>
		</a>
	</div>
	@endforeach
	@endforeach
</div>
@endsection