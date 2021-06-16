<?php
require_once('config.php');

try{
    $id = $_GET['id'];
    $r1 = $bdd->prepare("SELECT nom FROM questions where idquestions = :id ");
    $r1->execute([
        'id' => $id
    ]);
    $banane = $r1->fetchColumn();
    $max = $bdd->prepare("SELECT COUNT(*) FROM questions ");
    $max->execute([]);
    $row = $max->fetchColumn();
    $retour = array(0 => $banane, 1 => $row);
    echo JSON_encode($retour);

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
exit
?>