<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$ref_lager = $_POST["ref_lager"];
	$ref_kunde = $_POST["ref_kunde"];
	$mail_kunde =$_POST["mail_kunde"];
	$ref_agent = $_POST["ref_agent"];
	$mail_agent =$_POST["mail_agent"];
	$check_t1 = isset($_POST['t1']) ? 1 : 0;
	$check_imo = isset($_POST['imo']) ? 1 : 0;
	$pod = $_POST["pod"];
	$vessel = $_POST["vessel"];
	$shipper = $_POST["shipper"];
	$consignee = $_POST["consignee"];
	$marks = $_POST["marks"];
	$amount = $_POST["amount"];
	$package = $_POST["package"];
	$description = $_POST["description"];
	$kgs = $_POST["kgs"];
	$cbm = $_POST["cbm"];
	$internal = $_POST["internal"];


	echo $user;
	echo $check_t1;
	echo $check_imo;

}
?>
