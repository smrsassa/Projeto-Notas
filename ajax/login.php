<?php

//include 'db.php';

if ( ($_SERVER['REQUEST_METHOD'] == 'POST') ) {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  echo 1;
  exit;
}

?>