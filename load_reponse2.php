<?php
require_once('config.php');

try{
    $id = $_GET['id'];
    $r1 = $bdd->prepare("SELECT verite_1 FROM reponses where idreponses = :id ");
    $r1->execute([
        'id' => $id
    ]);
    $banane = $r1->fetch();
    echo $banane[0];

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
exit
?>