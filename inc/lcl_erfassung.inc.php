<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$ref_lager = $_POST["ref_lager"];
	$ref_kunde = $_POST["ref_kunde"];
	$mail_kunde =$_POST["mail_kunde"];
	$ref_agent = $_POST["ref_agent"];
	$mail_agent =$_POST["mail_agent"];


	echo $user;
	echo $ref_agent;

}
?>
