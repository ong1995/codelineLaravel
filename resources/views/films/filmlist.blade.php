@extends('layouts.master')
<div class="row">
	@section('body')
	@foreach($data as $resources)
	@foreach($resources as $resource)
	<div class="col-md-4">
		<img src="<?php echo asset("public/image/$resource->photo") ?>">
		<h3>{{$resource->name}}</h3>
		<h4>{{$resource->release_date}}</h4>
	</div>
	@endforeach
	@endforeach
</div>
@endsection