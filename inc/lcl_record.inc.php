<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$reference = $_POST["reference"];
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
	$package_type = $_POST["package_type"];
	$description = $_POST["description"];
	$kgs = $_POST["kgs"];
	$cbm = $_POST["cbm"];
	$remarks = $_POST["remarks"];

	echo "<br>";
	echo $user . "<br>";
	echo $reference . "<br>";
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
	echo nl2br($marks) . "<br>";
	echo $amount . "<br>";
	echo $package_type . "<br>";
	echo nl2br($description) . "<br>";
	echo $kgs . "<br>";
	echo $cbm . "<br>";
	echo $remarks . "<br>";

	$stmt = $pdo->prepare("INSERT INTO test (user, reference)
   VALUES (:user, :reference)");
	$stmt->execute(array(
		"user" => $user,
		"reference" => $reference));
   $stmt = null;

}
?>
