<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>

<div class="container">
	<fieldset>
		<legend>LCL Einlagern</legend>
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
		<?php
			$error_msg = "";
			if(isset($_POST['lcl_reference'])) {
			$lcl_reference = $_POST['lcl_reference'];

			$statement = $pdo->prepare("SELECT * FROM lcl WHERE `lcl_reference` = :lcl_reference");
			$result = $statement->execute(array('lcl_reference' => $lcl_reference));
			$lcl_reference = $statement->fetch();


			echo "<table style='border: 1px solid black;'>";
			$i = 1;
			while($row = $statement->fetch()) {
			echo "<tr>";
			echo "<td style='border: 1px solid black;'>".$i++."</td>";
			echo nl2br("<td>".$row['marks']."</td>");
			echo "</tr>";
			}
			echo "</table>";
		}
		?>
	</fieldset>

</div>


<?php
include("templates/footer.inc.php")
?>
