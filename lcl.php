<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>
<div class="container">
	<div>
		<fieldset>
			<legend>LCL Erfassung</legend>
			<form action="inc/lcl_erfassung.inc.php" method="POST">

				<label for="sachbearbeiter">Sachbearbeiter:</label>
				<input type="text" name="user" value="Tobias">

				<label for="ref_lager">Referenz SHOT:</label>
				<input type="text" name="ref_lager" required>

				<label for="ref_kunde">Referenz Kunde:</label>
				<input type="text" name="ref_kunde">
				<label for="mail_kunde">E-Mail Kunde:</label>
				<input type="email" name="mail_kunde">

				<label for="ref_agent">Referenz Agent:</label>
				<input type="text" name="ref_agent">
				<label for="mail_agent">E-Mail Agent:</label>
				<input type="email" name="mail_agent">

				<input type="checkbox" name="t1" id="t1" value="t1">
				<label for="t1">T-1</label>
				<input type="checkbox" name="imo" value="imo">IMO
				<br>
				<label for="pod">Empfangshafen:</label>
				<input type="text" name="pod">
				<label for="schiff">Schiff:</label>
				<input type="text" name="vessel">

				<label for="shipper">Versender:</label>
				<input type="text" name="shipper">
				<label for="consignee">Empfänger:</label>
				<input type="text" name="consignee">

				<h2>Sendungsdaten:</h2>
				<label for="marks">Markierung:</label>
				<textarea name="marks" rows="8" cols="25"></textarea>
				<label for="amount">Anzahl:</label>
				<textarea name="amount" rows="8" cols="4"></textarea>
				<label for="package">Verp.:</label>
				<textarea name="package" rows="8" cols="8"></textarea>
				<label for="description">Beschreibung:</label>
				<textarea name="description" rows="8" cols="30"></textarea>
				<label for="kgs">KGS:</label>
				<textarea name="kgs" rows="8" cols="4"></textarea>
				<label for="cbm">CBM:</label>
				<textarea name="cbm" rows="8" cols="4"></textarea>

				<button>Neue Zeile</button>

				<label for="internal">Interne Hinweise:</label>
				<textarea name="internal" rows="8" cols="100"></textarea>

				<br />

				<button type="submit" name="erfassen">Erfassen</button>
		</fieldset>
	</div>
</div>
<?php
include("templates/footer.inc.php")
?>
