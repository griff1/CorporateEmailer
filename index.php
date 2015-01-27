<html>
	<form method="POST">
		<a>A simple form to generate possible email addresses.  If you are trying to find someone's email, enter their information and this form will generate a scattershot of possible addresses and load them into your email client.</a><br><br>
		First name: <input type="text" name="firstname"><br><br>
		Last name: <input type="text" name="lastname"><br><br>
		Company: <input type="text" name="companyname"><br><br>
		Your company: <input type="text" name="yourco"><br><br>
		Domain (e.g. google.com): <input type="text" name="domain"><br><br>
		<input type="radio" name="client" value="gmail" checked>Gmail/Apple Mail<br>
		<input type="radio" name="client" value="outlook">Outlook<br><br>
		<input type="submit" value="Submit" name="Submit">
	</form>
<?php
	include("logic.php");
?>
</html>