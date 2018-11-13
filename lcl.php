<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");
?>
<div class="container">
	<fieldset>
		<legend>LCL Erfassung</legend>
		<form action="inc/lcl_record.inc.php" method="POST">

			<div class="flex-form">
				<label for="sachbearbeiter">Sachbearbeiter (User Id):</label>
				<input type="text" name="user" value="1" readonly>
			</div>

			<div class="flex-form">
				<label for="lcl_reference">LCL-Referenz:</label>
				<input type="text" name="lcl_reference" placeholder="LCL Referenz" required>
			</div>

			<div class="flex-form">
				<label for="pod">Empfangshafen:</label>
				<input type="text" name="pod">
			</div>
			<div class="flex-form">
				<label for="vessel">Schiff:</label>
				<input type="text" name="vessel">
			</div>

			<div class="flex-form">
				<label for="shipper">Versender:</label>
				<input type="text" name="shipper">
			</div>
			<div class="flex-form">
				<label for="ref_shipper">Referenz Versender:</label>
				<input type="text" name="ref_shipper">
			</div>
			<div class="flex-form">
				<label for="email_shipper">E-Mail Versender:</label>
				<input type="email" name="email_shipper">
			</div>

			<div class="flex-form">
				<label for="consignee">Empfänger:</label>
				<input type="text" name="consignee">
			</div>

			<div class="flex-form">
				<label for="ref_agent">Referenz Agent:</label>
				<input type="text" name="ref_agent">
			</div>
			<div class="flex-form">
				<label for="email_agent">E-Mail Agent:</label>
				<input type="email" name="email_agent">
			</div>

			<div class="flex-form">
				<input type="checkbox" name="t1" id="t1" value="t1">
				<label for="t1">T-1</label>
				<input type="checkbox" name="imo" value="imo">
				<label for="imo">IMO</label>
			</div>


			<br>
			<hr>
			<br>

			<h2>Sendungsdaten:</h2>
			<div class="flex-form">
				<label for="marks">Markierung:</label>
				<textarea name="marks" rows="5"></textarea>
			</div>
			<div class="flex-form">
				<label for="amount">Anzahl:</label>
				<input type="text" name="amount">
			</div>
			<div class="flex-form">
				<label for="package_type">Verpackungsart ID (1-6):</label>
				<input type="text" name="package_type">
			</div>
			<div class="flex-form">
				<label for="description">Beschreibung:</label>
				<textarea name="description" rows="5"></textarea>
			</div>
			<div class="flex-form">
				<label for="kgs">KGS:</label>
				<input type="text" name="kgs">
			</div>
			<div class="flex-form">
				<label for="cbm">CBM:</label>
				<input type="text" name="cbm">
			</div>

			<button type=button>neue Zeile</button>

			<div class="flex-form">
				<label for="remarks">Interne Hinweise:</label>
				<textarea name="remarks" rows="5"></textarea>
			</div>

			<br />
			<div class="flex-form">
				<input type="submit" name="erfassen" value="Erfassen">
			</div>
		</form>
	</fieldset>
</div>
<?php
include("templates/footer.inc.php")
?>
