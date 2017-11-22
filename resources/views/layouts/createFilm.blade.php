@extends('layouts.master')
@section('title')
Create film
@endsection

@section('body')
<div class="text-center">
	<h2>Add Films</h2>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="filmName">Name</label>
			<input type="text" class="form-control" id="filmName" aria-describedby="emailHelp" placeholder="Enter name" required>
		</div>
		<div class="form-group">
			<label for="filmDesc">Description</label>
			<input type="text" class="form-control" id="filmDesc" placeholder="Enter Description" required>
		</div>
		<div class="form-group">
			<label for="filmDate">Realease Date</label>
			<input type="date" class="form-control" id="filmDate" required>
		</div>
		<div class="form-group">
			<label>Rating</label>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="filmRate" id="filmRate1" value="option1" checked required>
					1
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="filmRate" id="filmRate2" value="option2">2
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="filmRate" id="filmRate3" value="option3">3
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="filmRate" id="filmRate4" value="option4">4
				</label>
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="filmRate" id="filmRate5" value="option5">5
				</label>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="filmTicket">Ticket Price</label>
			<input type="Number" class="form-control" id="filmTicket" placeholder="Enter price" required>
		</div>
		<div class="form-group">
			<label for="filmCountry">Country</label>
			<input type="text" class="form-control" id="filmCountry" placeholder="Enter country" required>
		</div>
		<div class="form-group">
			<label for="filmGenre">Genre</label>
			<input type="text" class="form-control" id="filmGenre" placeholder="Enter genre" required>
		</div>
		<div class="form-group">
			<label for="">Photo</label>
			<input type="file" id="">
		</div>
	</div>
</div>
<div class="pull-right">
	<button class="btn btn-primary">Add</button>
	<button class="btn btn-danger">Clear</button>
</div>
@endsection