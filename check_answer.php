<?php
require_once('config.php');

try{
  $reponse = $_POST['good'];
  $check = $bdd->prepare("SELECT bon_mensonge FROM mensonges where bon_mensonge = :reponse ");
  $check->execute([
      'reponse' => $reponse
  ]);
  
  $row = $check->fetch();
 

  if($row > 0){
    $resp = 0;
  }else{
    
    $resp = 1;
  }
  echo $resp;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
exit;