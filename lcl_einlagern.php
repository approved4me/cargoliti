<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>

<div class="container">
	<fieldset>
		<legend>LCL Suchen</legend>
		<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
		  <ul class="flex-outer">
			<li>
			  <label for="lcl_reference">LCL-Referenz:</label>
				  <input type="search" name="lcl_reference" placeholder="LCL-Referenz" required>
			</li>
			<li>
			  <input type="submit" name="suchen" value="Suchen">
			</li>
		  </ul>
		</form>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Referenz</th>
				<th>Hafenplatz</th>
				<th>Anzahl</th>
				<th>Packstückart</th>
				<th>Markierung</th>
				<th>KGS</th>
				<th>CBM</th>
				<th>Interne Hinweise</th>
			</tr>

		<?php

//			$statement = $pdo->prepare("SELECT * FROM package, lcl WHERE users.kunde_id = kunden.id and vorname = '$account' ORDER BY users.id");
//			$result = $statement->execute();
//
//
//

			$error_msg = "";
			if(isset($_POST['lcl_reference'])) {
			$lcl_reference = $_POST['lcl_reference'];

			$statement = $pdo->prepare("SELECT * FROM lcl WHERE `lcl_reference` LIKE :lcl_reference");
			$result = $statement->execute(array('lcl_reference' => "%$lcl_reference%"));

			$i = 1;
			while($row = $statement->fetch()) {
				echo "<tr>";
				echo "<td>".$i++."</td>";
				echo "<td>".$row['lcl_reference']."</td>";
				echo "<td>".$row['pod']."</td>";
				echo ("<td>".$row['amount']."</td>");
				echo ("<td>".$row['package_id']."</td>");
				echo nl2br("<td>".$row['marks']."</td>");
				echo ("<td>".$row['kgs']."</td>");
				echo ("<td>".$row['cbm']."</td>");
				echo nl2br("<td>".$row['remarks']."</td>");
				echo "</tr>";
			}
		}
		?>
		</table>
	</fieldset>
</div>


<?php
include("templates/footer.inc.php")
?>
