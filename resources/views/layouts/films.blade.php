@extends('layouts.master')

@section('body')
<div class="row">
	<div class="col-md-3">
		<img src="<?php echo asset("public/image/$data->photo") ?>"></img>
	</div>
	<div class="col-md">
		<h1>{{ $data->name }}</h1>
		<h3>{{ $data->release_date }}</h3>
		<h4>{{ $data->description}}</h4>
		<h4>Rating: 
			@while($data->rating-- > 0 )
			<i class="fa fa-star" aria-hidden="true"></i>
			@endwhile
		</h4>
		<h4>Price: ${{ $data->ticket_price }}</h4>
		<h4>Country: {{ $data->country }}</h4>
		<h4>Genre: {{ $data->genre }}</h4>
	</div>
</div>
@endsection