<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>
<div class="container">
	<fieldset>
		<legend>LCL Einlagern</legend>
		<form action="inc/lcl_update.inc.php" method="POST">
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
	</fieldset>
</div>
<?php
include("templates/footer.inc.php")
?>
