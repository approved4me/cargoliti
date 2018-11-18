<?php 
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>

  
 <div class="container">
	<h1>Willkommen</h1>
	<p>
		<a href="lcl_erfassen.php">LCL Erfassen</a>
	</p>
	<p>
		<a href="lcl_suchen.php">LCL Suchen </a>
	</p>
	<p>
		<a href="lcl_einlagern.php">LCL Einlagern</a>
	</p>
</div>
  
<?php 
include("templates/footer.inc.php")
?>
