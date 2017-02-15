console.log('fred ma menti');

$('#moins').on('submit', function(event){
	event.preventDefault();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url : "/moins"+id,
		type : "POST",
		success : function(response){
			$('#docker').html(response);
		}
	});
});

$('#plus').on('submit', function(){
	event.preventDefault();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		url : "/plus"+id,
		type : "POST",
		success : function(response){
			$('#docker').html(response);
		}
	});
});
