<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("templates/header.inc.php");
?>

<div class="container main-container">

<h1>Herzlich Willkommen!</h1>

Hallo <?php echo htmlentities($user['vorname']); ?>,<br>
Herzlich Willkommen im internen Bereich!<br><br>

<div class="panel panel-default">
 
<table class="table">
<tr>
	<th>#</th>
	<th>Vorname</th>
	<th>Nachname</th>
	<th>E-Mail</th>
	<th>Kunde</th>
</tr>
<?php 
$account = ($user['vorname']);

//  $statement = $pdo->prepare("SELECT * FROM users ORDER BY id");
	$statement = $pdo->prepare("SELECT * FROM users, kunden WHERE users.kunde_id = kunden.id and vorname = '$account' ORDER BY users.id");
	$result = $statement->execute();

$count = 1;
while($row = $statement->fetch()) {
	echo "<tr>";
	echo "<td>".$count++."</td>";
	echo "<td>".$row['vorname']."</td>";
	echo "<td>".$row['nachname']."</td>";
	echo '<td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>';
	echo "<td>".$row['kunde']."</td>";
	echo "</tr>";
}
?>
</table>
</div>


</div>
<?php 
include("templates/footer.inc.php")
?>
