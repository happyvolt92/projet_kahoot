
		<header>
			<p class="pseudo">Pseudo</p>
		</header>

		<div class="timer">Timer</div>
		<p class="question">Trouvez le mensonge d'Élodie</p>
		<main class="main">
				<div class="reponse_1">J'ai fait de la boxe anglaise</div>
				<div class="reponse_2">J'ai toujours voulu être un pirate</div>
			
				<div class="reponse_3">j'ai fait des tatoos dans un festival trance à 2 heures du matin et gagné un prix
				</div>
				<div class="reponse_4">Je suis une grande fan d'Ariana Grande</div>
		</main>
		
<script>$(for(let i=1 ; i<5 ; i++){
	
  
        $(".main").append($(".main").children().splice(Math.floor(Math.random() * $(".main").children().length), 1)[0]);
    
	});</script>	
<script src="app.js"></script>

	

