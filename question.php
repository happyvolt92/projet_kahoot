<header>

	
</header>

<div class="timer">
	<div class="circle-timer">
		<div class='timer-slot'>
			<div class='timer-lt'>
			</div>
		</div>
		<div class="timer-slot">
			<div class='timer-rt'>
			</div>
		</div>
	<div class="count"></div>
	</div>
</div>
<p class="question"></p>
<main class="main">
	<form class="reponse_1" name="good">
		<textarea type="text" value="" name="good" id='reponse_1'></textarea></form>
	<form class="reponse_2" name="good">
		<textarea type="text" value="" name="good" id='reponse_2'></textarea></form>
	<form class="reponse_3" name="good">
		<textarea type="text" value="" name="good" id='reponse_3'></textarea></form>
	<form class="reponse_4" name="good">
		<textarea type="text" value="" name="good" id='reponse_4'></textarea></form>
</main>


<script type="module">



	$.ajax({
		url: 'load_reponse.php',
		type: 'GET',
		data: $('.id').serialize(),
		success: function (question) {
			
			var parse = JSON.parse(question);


			$('#reponse_1').val(parse[0]);
			$('#reponse_2').val(parse[1]);
			$('#reponse_3').val(parse[2]);
			$('#reponse_4').val(parse[3]);
	var initialCount 	= 20,
 	  count  = initialCount,
 	  timerPause		= false;

	function timer() {	    	
	if (!timerPause) {
	  	count = count - 1;
	  	if (count <= -1) {
	  		count = initialCount;
	        var el = $(".circle-timer");
	        el.before( el.clone(true) ).remove();
	  	} 
	  	$(".timer .count").text(count);
  	}
}
setInterval(timer, 1000);

$(".circle-timer").click( function(){
	$(this).toggleClass('paused');
	if ($(this).hasClass('paused')) {
		timerPause = true;
	} else {
		timerPause = false;
	}
});



		}
	});

	$.ajax({
	url:'load_question.php',
	type:'GET',
	data:$('.id').serialize(),
	success:function(question){
		var id = $('.id').val();
		var load = JSON.parse(question);
		console.log(load);
			$('header').prepend('<p class="nb_question">Q' + id + '/' + load[1] + '</p>');
			$('.max').val(load[1]);
		
		$('.question').html( load[0] + ', quel est son mensonge ?');
		var score = $('.score').val();
		$('header').append('<p class="pseudo">Score : ' + score + '</p>');



		}});

	
		
	


	$('.reponse_1').on('click', function () {

		$.ajax({
			url: 'check_answer.php',
			type: 'POST',
			data: $('#reponse_1').serialize(),
			datatype: 'html',
			success: function (good) {
				var id = $('.id').val();
				var max = $('.max').val();
				var score = parseInt($('.score').val(), 10);
				console.log(score += 500);
				
				console.log(score);
				id++;
				if (good == 0 && id <= max) {
					console.log('false');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);

					setTimeout(() => {
						$('section').load('false_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);
				}
				else if (good == 0 && id > max){
					$('section').load('result.php');
					console.log('false');
				} 
					
				else if (good == 1 && id <= max){
					console.log('true');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					$('.score').val(score);

				setTimeout(() => {
						$('section').load('valid_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);

				}

					else if (good == 1 && id > max){
					$('section').load('result.php');
					console.log('true');
					$('.score').val(score);
				}
				else{};

			}
		})
	});

	$('.reponse_2').on('click', function () {

		$.ajax({
			url: 'check_answer.php',
			type: 'POST',
			data: $('#reponse_2').serialize(),
			datatype: 'html',
			success: function (good) {
				var id = $('.id').val();
				var max = $('.max').val();
				id++;
				
				var score = parseInt($('.score').val(), 10);
				console.log(score += 500);
				
				if (good == 0 && id <= max) {
					console.log('false');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					setTimeout(() => {
						$('section').load('false_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);
				}
				else if (good == 0 && id > max){
					$('section').load('result.php');
					console.log('false');
				} 
					
				else if (good == 1 && id <= max){
					console.log('true');
				
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					$('.score').val(score);
					setTimeout(() => {
						$('section').load('valid_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);

				}

					else if (good == 1 && id > max){
					$('section').load('result.php');
					console.log('true');
					$('.score').val(score);
				}else{};
			
				

			}
		})
	});

	$('.reponse_3').on('click', function () {
		$.ajax({
			url: 'check_answer.php',
			type: 'POST',
			data: $('#reponse_3').serialize(),
			datatype: 'html',
			success: function (good) {
				var id = $('.id').val();
				var max = $('.max').val();
				id++;
				
				var score = parseInt($('.score').val(), 10);
				console.log(score += 500);
				if (good == 0 && id <= max) {
					console.log('false');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					setTimeout(() => {
						$('section').load('false_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);
				}
				else if (good == 0 && id > max){
					$('section').load('result.php');
					console.log('false');
				} 
					
				else if (good == 1 && id <= max){
					console.log('true');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					$('.score').val(score);
					setTimeout(() => {
						$('section').load('valid_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);

				}

					else if (good == 1 && id > max){
					$('section').load('result.php');
					console.log('true');
					$('.score').val(score);
				}else{};
			
			}
		})
	});
	$('.reponse_4').on('click', function () {
		$.ajax({
			url: 'check_answer.php',
			type: 'POST',
			data: $('#reponse_4').serialize(),
			datatype: 'html',
			success: function (good) {
				var id = $('.id').val();
				var max = $('.max').val();
				id++;
				var score = parseInt($('.score').val(), 10);
				
				console.log(score += 500);
				if (good == 0 && id <= max) {
					console.log('false');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					setTimeout(() => {
						$('section').load('false_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);
				}
				else if (good == 0 && id > max){
					$('section').load('result.php');
					console.log('false');
				} 
					
				else if (good == 1 && id <= max){
					console.log('true');
					
					console.log(id);
					$('section').load('loader_answer.php');
					$('.id').val(id);
					$('.score').val(score);
					setTimeout(() => {
						$('section').load('valid_answer.php');
						
					}, 1000);
					setTimeout(() => {
						let old_id = id - 1;
						$('header').prepend('<p class="nb_question">Q' + old_id + '/' + max + '</p>');
					},1150);
					setTimeout(() => {
					$('section').load('question.php');

				}, 4000);

				}

				else if (good == 1 && id > max){
					$('section').load('result.php');
					console.log('true');
					$('.score').val(score);
				}else{};
			
			}
		})
	});
</script>