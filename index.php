<!DOCTYPE html>
<html lang="fr">
<?php
require 'config.php';
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="CSS/style.css">
	<title>Quizzoot!</title>
</head>

<body>
	<!-- Effet glassmorphism -->
	<div class="glass"></div>

	<!-- Page d'accueil -->
	<section>
		<h1>Quizzoot!</h1>
		<form id="pin_form" class="join_quiz">

			<input type="number" required minlength="1" value="" placeholder="Game PIN" id="game_pin" name="game_pin" autocomplete="off">
			<button type="submit" class="button_home">Enter</button>
		</form>
		<span></span>

	</section>
	<!-- Footer qui ne bougera pas -->
	<footer>
		<img src="media/github.svg" alt="Le logo de github">
			<form class="form_id">
			<input type="hidden" class="id" name="id" value="1" >
		</form>
		<h3>© ACS 2021</h3>
	</footer>
	<script src="app.js">$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {    options.async = true; });</script>
</body>

</html>