```
<?php
require_once('config.php');

try{
    $id = $_GET['id'];
    $r1 = $bdd->prepare("SELECT bon_mensonge, verite_1, verite_2, verite_3 FROM mensonges NATURAL JOIN reponses where idmensonges = :id AND idreponses = :id ");
    $r1->execute([
        'id' => $id
    ]);
    $banane = $r1->fetch(PDO::FETCH_NUM);
    // $apple = mb_convert_encoding($banane, "UTF-8", "HTML-ENTITIES");
    shuffle($banane);
    echo JSON_encode($banane);

    

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

exit
?>