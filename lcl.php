<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>


 <div class="container">
	<?php
	 require_once("inc/lcl_erfassung.inc.php");
	?>
</div>

<?php
include("../templates/footer.inc.php")
?>
