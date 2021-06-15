        <?php 
     

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=kahoot;charset=utf8', 'Dylan', 'Neptune26.'); 
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>