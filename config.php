        <?php 
     

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=clementp_quizzoot;charset=utf8', 'clementp', '6HnmyOxlqQj+mw=='); 
        echo 'banane';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

