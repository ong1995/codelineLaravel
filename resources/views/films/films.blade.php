@extends('layouts.app')

@section('title')
{{ $data->name }}
@endsection

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-2">
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
<div class="row comment-section">
	<div class="col-md-8 col-md-offset-2">
	@if(Auth::check())
	<div class="comment-box" >
		<form role="form" action="comment" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label><i class="fa fa-comment"></i> Comment</label>
				<input type="hidden" name="movie-id" value="{{ $data->id }}">
				<input type="hidden" name="movie-slug" value="{{ $data->slug }}">
				<textarea class="form-control" name="movie-comment" placeholder="Comments and Suggestion"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	@endif
	<div class="display-comment">
		@foreach($comments as $comment)
		<div class="user-comment">
			<div class="user-name"> {{ $comment->user->name }} <i class="fa fa-comment-o pull-right"></i></div>
			<div class="user-content">{{ $comment->comment }}</div>
		</div>
		@endforeach
	</div>
	</div>
</div>
@endsection