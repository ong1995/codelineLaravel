$(document).ready(function(){
	var util = new Utility();

	// $("#createForm").submit(function(){
	// 	var formData = new FormData($(this)[0]);

	// 	$.ajax({
	// 		url: util.url+"/createFilms",
	// 		type: 'POST',
	// 		data: formData,
	// 		success: function (data) {
	// 			alert(data)
	// 		},
	// 		cache: false,
	// 		processData: false
	// 	});

	// 	return false;
	// });


	$(document).on('click', '#addFilm', function(e){
		e.preventDefault();
		var formData = new FormData();
		formData.append('photo', $('#imageFile')[0].files[0]);
		formData.append('name',  $('#filmName').val());
		formData.append('desc', $('#filmDesc').val());
		formData.append('date', $('#filmDate').val());
		formData.append('ticket', $('#filmTicket').val());
		formData.append('country', $('#filmCountry').val());
		formData.append('genre', $('#filmGenre').val());
		formData.append('rating', $("input[name='rate']:checked").val());
		// formData.append('filmName')
		$.ajax({
			url: util.url+"/createFilms",
			type: 'POST',
			data: formData,
			async: false,
			success: function (data) {
				console.log(data);
			},
			error: function (data,a,b){
				console.log(data,a,b);
			},
			contentType: false,
			processData: false	
		});
	});



});