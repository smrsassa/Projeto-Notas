<?php
if ( !isset($_SESSION['logado']) ) {
	header("location:login.php");
}
?>