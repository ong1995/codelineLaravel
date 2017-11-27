@extends('layouts.app')
@section('title')
Create film
@endsection

@section('content')
<div class="text-center">
	<h2>Add Films</h2>
</div>
<form id="createForm" action="createFilms">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="filmName">Name</label>
				<input type="text" class="form-control" id="filmName" name="title" placeholder="Enter name" required>
			</div>
			<div class="form-group">
				<label for="filmDesc">Description</label>
				<textarea class="form-control" id="filmDesc" name="desc" rows="5" required></textarea>
			</div>
			<div class="form-group">
				<label class="control-label">Rating</label>
				<div>
					<label class="radio-inline"> 
						<input type="radio" name="rate" id="rate1" value="1" checked>1 
					</label>
					<label class="radio-inline"> 
						<input type="radio" name="rate" id="rate2" value="2"> 2 
					</label>
					<label class="radio-inline"> 
						<input type="radio" name="rate" id="rate3" value="3"> 3 
					</label>
					<label class="radio-inline"> 
						<input type="radio" name="rate" id="rate4" value="4"> 4 
					</label>
					<label class="radio-inline"> 
						<input type="radio" name="rate" id="rate5" value="5"> 5 
					</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="filmDate">Release Date</label>
				<input type="date" class="form-control" id="filmDate" name="date" required>
			</div>
			
			<div class="form-group">
				<label for="filmTicket">Ticket Price</label>
				<input type="Number" class="form-control" id="filmTicket" name="price" placeholder="Enter price" required>
			</div>
			<div class="form-group">
				<label for="filmCountry">Country</label>
				<input type="text" class="form-control" id="filmCountry" name="country" placeholder="Enter country" required>
			</div>
			<div class="form-group">
				<label for="filmGenre">Genre</label>
				<input type="text" class="form-control" id="filmGenre" name="genre" placeholder="Enter genre" required>
			</div>
			<div class="form-group">
				<label for="">Photo</label>
				<input type="file" id="imageFile" name="photo">
			</div>
		</div>
	</div>
	<div class="pull-right">
		<button class="btn btn-primary" id="addFilm" type="submit">Add</button>
		<button class="btn btn-danger">Clear</button>
	</div>
</form>
@endsection

@section('javascript')
<script src="{{ URL::asset('public/js/createFilms.js') }}"></script>
@endsection