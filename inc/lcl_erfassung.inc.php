<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$ref_lager = $_POST["ref_lager"];

	echo $user;
	echo $ref_lager;

}
?>
