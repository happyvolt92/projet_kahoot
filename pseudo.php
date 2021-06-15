

<form id="pseudo_form" class="join_quiz">
    <input type="text" required minlength="1" value="" placeholder="Enter Pseudo" id="pseudo" name="pseudo" autocomplete="off">
    <button type="submit" class="button_pseudo">Enter</button>
    <span></span>
</form>
<script>
$('#pseudo_form').on('submit', function(e){
	e.preventDefault();

	
	$('#pseudo_form').html();
	$.ajax({
		url:'check_pseudo.php',
		type:'POST',
		data: $(this).serialize(),
		success:function(resp){
			console.log(resp);
			if(resp == 0){
				$('span').html("Pseudo existant").fadeIn("slow");
                console.log('banane');
				
			}else{
                $('span').html("Waiting...").fadeIn("slow");
				console.log('fraise');
                
                setTimeout(() => {
                $('h2').remove();
                $('section').load("question.php");
                  
                }, 1000);
                


			}
		}
	})}
);</script>