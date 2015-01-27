<?php
	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$company = htmlspecialchars($_POST['company']);
	$domain = htmlspecialchars($_POST['domain']);

	if(isset($_POST['Submit']))
	{
		$emails = [];

		array_push($emails, $firstname . $lastname . "@" . $domain);
		array_push($emails, $firstname . "." . $lastname . "@" . $domain);
		array_push($emails, $lastname . "." . $firstname . "@" . $domain);
		array_push($emails, $firstname . $lastname[0] . "@" . $domain);
		array_push($emails, $lastname[0] . $firstname . "@" . $domain);
		array_push($emails, $firstname[0] . $lastname[0] . "@" . $domain);
		array_push($emails, $firstname . "@" . $domain);
		array_push($emails, $lastname . "@" . $domain);
		array_push($emails, $firstname . "_" . $lastname . "@" . $domain);

		$string_version = "";
		for($i = 0; i < count($emails); $i++)
		{
			$string_version = $string_version . "; " . $emails[i];
		}
		echo("<a href=\"mailto:" . $string_version . "> Click here </a>");
	}
?>