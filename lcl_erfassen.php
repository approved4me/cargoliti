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
      <ul class="flex-outer">
        <li>
          <label for="sachbearbeiter">Sachbearbeiter (User Id):</label>
			  <input type="text" name="user" value="1" readonly>
        </li>
        <li>
          <label for="lcl_reference">LCL-Referenz:</label>
			  <input type="text" name="lcl_reference" placeholder="LCL-Referenz" required>
        </li>
        <li>
          <label for="pod">Empfangshafen:</label>
			  <input type="text" name="pod">
        </li>
        <li>
          <label for="vessel">Schiff:</label>
			  <input type="text" name="vessel">
        </li>
        <li>
          <label for="shipper">Versender:</label>
			  <input type="text" name="shipper">
        </li>
        <li>
          <label for="ref_shipper">Referenz Versender:</label>
			  <input type="text" name="ref_shipper">
        </li>
        <li>
          <label for="email_shipper">E-Mail Versender:</label>
			  <input type="email" name="email_shipper">
        </li>
        <li>
          <label for="consignee">Empfänger:</label>
          <input type="text" name="consignee">
        </li>
        <li>
          <label for="ref_agent">Referenz Agent:</label>
			  <input type="text" name="ref_agent">
        </li>
        <li>
          <label for="email_agent">E-Mail Agent:</label>
          <input type="email" name="email_agent">
       </li>
        <li>
          <ul class="flex-inner">
            <li>
              <input type="checkbox" name="t1" id="t1" value="t1">
              <label for="t1">T-1</label>
            </li>
            <li>
              <input type="checkbox" name="imo" value="imo">
              <label for="imo">IMO</label>
            </li>
          </ul>
        </li>
      </ul>
			<hr>

			<h3>Sendungsdaten:</h3>
      <ul class="flex-outer">
        <li>
          <label for="marks">Markierung:</label>
          <textarea name="marks" rows="5"></textarea>
        </li>
        <li>
          <label for="amount">Anzahl:</label>
          <input type="text" name="amount">
        </li>
        <li>
          <label for="package_type">Verpackungsart ID (1-6):</label>
          <input type="text" name="package_type">
        </li>
        <li>
          <label for="description">Beschreibung:</label>
          <textarea name="description" rows="5"></textarea>
        </li>
        <li>
          <label for="kgs">KGS:</label>
          <input type="text" name="kgs">
        </li>
        <li>
          <label for="cbm">CBM:</label>
          <input type="text" name="cbm">
        </li>
        <li>
          <label for="remarks">Interne Hinweise:</label>
          <textarea name="remarks" rows="5"></textarea>
        </li>
        <li>
          <input type="submit" name="erfassen" value="Erfassen">
        </li>
      </ul>
		</form>
	</fieldset>
</div>
<?php
include("templates/footer.inc.php")
?>
