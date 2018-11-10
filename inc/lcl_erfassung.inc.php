<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$ref_lager = $_POST["ref_lager"];
	$pod = $_POST["pod"];
	$vessel = $_POST["vessel"];
	$shipper = $_POST["shipper"];
	$ref_kunde = $_POST["ref_shipper"];
	$mail_kunde =$_POST["mail_shipper"];
	$consignee = $_POST["consignee"];
	$ref_agent = $_POST["ref_agent"];
	$mail_agent =$_POST["mail_agent"];
	$check_t1 = isset($_POST['t1']) ? 1 : 0;
	$check_imo = isset($_POST['imo']) ? 1 : 0;

	$marks = $_POST["marks"];
	$amount = $_POST["amount"];
	$package = $_POST["package"];
	$description = $_POST["description"];
	$kgs = $_POST["kgs"];
	$cbm = $_POST["cbm"];
	$internal = $_POST["internal"];

	echo "<br>";
	echo $user . "<br>";
	echo $ref_lager . "<br>";
	echo $ref_kunde . "<br>";
	echo $mail_kunde . "<br>";
	echo $ref_agent . "<br>";
	echo $mail_agent . "<br>";
	echo $check_t1 . "<br>";
	echo $check_imo . "<br>";
	echo $pod . "<br>";
	echo $vessel . "<br>";
	echo $shipper . "<br>";
	echo $consignee . "<br>";
	echo $marks . "<br>";
	echo $amount . "<br>";
	echo $package . "<br>";
	echo $description . "<br>";
	echo $kgs . "<br>";
	echo $cbm . "<br>";
	echo $internal . "<br>";
}
?>
