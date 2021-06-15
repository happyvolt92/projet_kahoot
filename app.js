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



	
	
	var id = $('.id').val();
$('header').prepend('<p class="nb_question">Q' + id + '/15</p>');
$('.reponse_1').click(function(){
	
	id = ++id;
$(".id").val(id);
$('section').load('loader_answer.php');
setTimeout(() => {
	$('section').load('question.php');
	
}, 2000);

});


$.ajax({
	url:'load_question.php',
	type:'GET',
	data:$('.form_id').serialize(),
	success:function(question){
		$('.question').html(question + ", quel est son mensonge ?");
	}
});

$.ajax({
	url:'load_reponse1.php',
	type:'GET',
	data:$('.form_id').serialize(),
	success:function(reponse_1){
		$('.reponse_1').html(reponse_1);
	}
});


$.ajax({
	url:'load_reponse2.php',
	type:'GET',
	data:$('.form_id').serialize(),
	success:function(reponse_2){
		$('.reponse_2').html(reponse_2);
	}
});

$.ajax({
	url:'load_reponse3.php',
	type:'GET',
	data:$('.form_id').serialize(),
	success:function(reponse_3){
		$('.reponse_3').html(reponse_3);
	}
});

$.ajax({
	url:'load_reponse4.php',
	type:'GET',
	data:$('.form_id').serialize(),
	success:function(reponse_4){
		$('.reponse_4').html(reponse_4);
	}});

	

