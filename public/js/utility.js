$(document).ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
});

function Utility () {
	Utility.prototype.url = "http://localhost/codelineTestLaravel";
}