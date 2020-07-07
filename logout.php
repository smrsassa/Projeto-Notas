<?php
require_once('class/db.class.php');
require_once('class/usuario.class.php');

session_start();
session_destroy();
header("location: login.php"); 

?>