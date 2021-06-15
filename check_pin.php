<?php
require_once('config.php');

try{
    if(isset($_POST['game_pin'])){
        $game_pin = $_POST['game_pin'];
  $pin = $bdd->prepare("SELECT * FROM quiz where quiz_id = :game_pin ");
  $pin->execute([
      'game_pin' => $game_pin
  ]);
  
  $row = $pin->fetch();
 

  if($row == 0){
    $response = 0;
  }else{
    
    $response = $row['titre'];
  }
  echo $response;
}}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
exit;
?>