<?php
require_once('config.php');

try{
    if(isset($_POST['pseudo'])){
        $pseudo = $_POST['pseudo'];
  $ps = $bdd->prepare("SELECT * FROM users where user_name = :user_name ");
  $ps->execute([
      'user_name' => $pseudo
  ]);
  
  $row = $ps->fetch();
 

  if($row > 0){
    $resp = 0;
  }else{
    $resp = 1;
    $add = $bdd->prepare("INSERT INTO users set  user_name = :user_name, score = '0' ");
    $add->execute([
        'user_name' => $pseudo
    ]);
    
  }
  echo $resp;
}}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
exit
?>