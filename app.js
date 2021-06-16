$('#pin_form').on('submit', function(e){
	e.preventDefault();

	
	$('#pin_form').html();
	$.ajax({
		url:'check_pin.php',
		type:'POST',
		data: $(this).serialize(),
		success:function(response){
			console.log(response);
			if(response == 0){
				$('span').html("Code non existant").fadeIn("slow");
				
			}else{
				$('body').prepend('<h2>' + response + '</h2>');
				$('section').empty();
				$("section").load("pseudo.php");
			}
		}
	})}
);