<?php

 require_once 'config.php';

 if(!empty($_POST['input_pin'])){
     $pin = $_POST['input_pin'];
     if($pin = 420){
         echo 'true';
     }
 }
?>