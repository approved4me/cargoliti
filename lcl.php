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
			<form action="inc/lcl_record.inc.php" method="POST">

				<label for="sachbearbeiter">Sachbearbeiter:</label>
				<input type="text" name="user" value="Tobias">

				<label for="reference">Referenz SHOT:</label>
				<input type="text" name="reference" required>

				<label for="pod">Empfangshafen:</label>
				<input type="text" name="pod">
				<label for="vessel">Schiff:</label>
				<input type="text" name="vessel">

				<label for="shipper">Versender:</label>
				<input type="text" name="shipper">
				<label for="ref_shipper">Referenz Versender:</label>
				<input type="text" name="ref_shipper">
				<label for="email_shipper">E-Mail Versender:</label>
				<input type="email" name="email_shipper">

				<label for="consignee">Empfänger:</label>
				<input type="text" name="consignee">

				<label for="ref_agent">Referenz Agent:</label>
				<input type="text" name="ref_agent">
				<label for="email_agent">E-Mail Agent:</label>
				<input type="email" name="email_agent">

				<input type="checkbox" name="t1" id="t1" value="t1">
				<label for="t1">T-1</label>
				<input type="checkbox" name="imo" value="imo">
				<label for="imo">IMO</label>
				<br>
				<br>

				<h2>Sendungsdaten:</h2>
				<label for="marks">Markierung:</label>
				<textarea name="marks" rows="5"></textarea>
				<label for="amount">Anzahl:</label>
				<textarea name="amount" rows="1"></textarea>
				<label for="package_type">Verpackungsart:</label>
				<textarea name="package_type" rows="1"></textarea>
				<label for="description">Beschreibung:</label>
				<textarea name="description" rows="5"></textarea>
				<label for="kgs">KGS:</label>
				<textarea name="kgs" rows="1"></textarea>
				<label for="cbm">CBM:</label>
				<textarea name="cbm" rows="1"></textarea>

				<button>Neue Zeile</button>

				<label for="remarks">Interne Hinweise:</label>
				<textarea name="remarks" rows="5"></textarea>

				<br />
				<input type="submit" name="ref_agent" value="Erfassen">
		</fieldset>
	</div>
</div>
<?php
include("templates/footer.inc.php")
?>
