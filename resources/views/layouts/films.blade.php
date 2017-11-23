@extends('layouts.master')

@section('body')
<div class="row">
	<div class="col-md-3">
		<img src="<?php echo asset("public/image/$data->photo") ?>"></img>
	</div>
	<div class="col-md">
		<h1>{{ $data->name }}</h1>
		<h2>{{ $data->realease_date }}</h2>
	</div>
</div>
@endsection