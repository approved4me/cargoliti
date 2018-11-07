<div>
<fieldset>
	<legend>LCL Erfassung</legend>
	<form action="" method="POST">
		<label for="sachbearbeiter">Sachbearbeiter:</label>
		<input type="text" name="user" value="Tobias">
		<label for="ref_lager">Referenz SHOT:</label>
		<input type="text" name="ref_lager" required>
		<label for="ref_Kunde">Referenz Kunde:</label>
		<input type="text" name="ref_kunde">
		<label for="mail_agent">E-Mail Kunde:</label>
		<input type="email" name="email">
		<label for="ref_agent">Referenz Agent:</label>
		<input type="text" name="ref_agent">
		<label for="mail_agent">E-Mail Agent:</label>
		<input type="email" name="email">

		<input type="checkbox" name="t1" value="T-1">T-1<br>
		<input type="checkbox" name="imo" value="T-1">IMO<br>

		<label for="pod">Empfangshafen:</label>
		<input type="text" name="pod">
		<label for="schiff">Schiff:</label>
		<input type="text" name="schiff">
		<label for="shipper">Versender:</label>
		<input type="text" name="shipper">
		<label for="consignee">Empfänger:</label>
		<input type="text" name="consignee">

		<label for="marks">Markierung:</label>
		<textarea name="marks" rows="8" cols="25"></textarea>
		<label for="anzahl">Anzahl:</label>
		<textarea name="marks" rows="8" cols="4"></textarea>
		<label for="Verpackung">Verp.:</label>
		<textarea name="package" rows="8" cols="8"></textarea>
		<label for="description">Beschreibung:</label>
		<textarea name="description" rows="8" cols="30"></textarea>
		<label for="kgs">KGS:</label>
		<textarea name="kgs" rows="8" cols="4"></textarea>
		<label for="cbm">KGS:</label>
		<textarea name="cbm" rows="8" cols="4"></textarea>

		<label for="internal">Interne Hinweise:</label>
		<textarea name="internal" rows="8" cols="100"></textarea>


		<br />
		<input type="submit" value="Erfassen"> </form>
</fieldset>
</div>
