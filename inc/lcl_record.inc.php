<?php
if	(isset($_POST['erfassen'])) {

	require("config.inc.php");

	$user = $_POST["user"];
	$reference = $_POST["reference"];
	$pod = $_POST["pod"];
	$vessel = $_POST["vessel"];
	$shipper = $_POST["shipper"];
	$ref_shipper = $_POST["ref_shipper"];
	$email_shipper =$_POST["email_shipper"];
	$consignee = $_POST["consignee"];
	$ref_agent = $_POST["ref_agent"];
	$email_agent =$_POST["email_agent"];
	$check_t1 = isset($_POST['t1']) ? 1 : 0;
	$check_imo = isset($_POST['imo']) ? 1 : 0;
	$marks = $_POST["marks"];
	$amount = $_POST["amount"];
	$package_type = $_POST["package_type"];
	$description = $_POST["description"];
	// $kgs = number_format($_POST["kgs"], 3, '.', ''); -- geht nicht
	// komma in punkt umwandeln zum Speichern von Nachkommastellen
	$kgs = str_replace(",", ".", $_POST["kgs"]);
	$cbm = str_replace(",", ".", $_POST["cbm"]);
	$remarks = $_POST["remarks"];

	echo "<br>";
	echo $user . "<br>";
	echo $reference . "<br>";
	echo $ref_shipper . "<br>";
	echo $email_shipper . "<br>";
	echo $ref_agent . "<br>";
	echo $email_agent . "<br>";
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
	/* Ausgabe der Zahl mit Dezimalpunkt und 3 Stellen nach dem Komma */
	echo number_format($kgs, 3, ',', '.') .  "<br>";

	$stmt = $pdo->prepare("INSERT INTO lager (
	user_id,
	reference,
	shipper,
	ref_shipper,
	email_shipper,
	ref_agent,
	email_agent,
	consignee,
	vessel,
	pod,
	amount,
	package_id,
	description,
	kgs,
	cbm,
	marks,
	t1,
	imo,
	remarks)

   VALUES (
	:user_id,
	:reference,
	:shipper,
	:ref_shipper,
	:email_shipper,
	:ref_agent,
	:email_agent,
	:consignee,
	:vessel,
	:pod,
	:amount,
	:package_id,
	:description,
	:kgs,
	:cbm,
	:marks,
	:t1,
	:imo,
	:remarks)");

	$stmt->execute(array(
		"user_id" => $user,
		"reference" => $reference,
		"shipper" => $shipper,
		"ref_shipper" => $ref_shipper,
		"email_shipper" => $email_shipper,
		"ref_agent" => $ref_agent,
		"email_agent" => $email_agent,
		"consignee" => $consignee,
		"vessel" => $vessel,
		"pod" => $pod,
		"amount" => $amount,
		"package_id" => $package_type,
		"description" => $description,
		"kgs" => $kgs,
		"cbm" => $cbm,
		"marks" => $marks,
		"t1" => $check_t1,
		"imo" => $check_imo,
		"remarks" => $remarks
		));
   $stmt = null;

}
?>
