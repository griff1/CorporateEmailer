<?php
	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$company = htmlspecialchars($_POST['companyname']);
	$domain = htmlspecialchars($_POST['domain']);
	$yourco = htmlspecialchars($_POST['yourco']);
	$del = $_POST['client'];

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

		//echo(implode($emails) . "<br></br>");
		$string_version = "";
		$delimiter = "; ";
		if($del == "gmail")
		{
			$delimiter = ", ";
		}
		for($i = 1; $i < count($emails); $i++)
		{
			if($string_version == "")
				$string_version .= $emails[$i];
			else
				$string_version = $string_version . $delimiter . $emails[$i];
		}
		//fopen("http://198.199.105.42/mailto:$emails[0]?bcc=$string_version&subject=$company%20|%20Summit Partners&body=Dear%20$firstname%20$lastname%20of%20$company,");
		echo("<a href=\"mailto: $emails[0]?bcc=$string_version&subject=$company%20|%20$yourco&body=Dear%20$firstname%20$lastname%20of%20$company,\"> Click here </a>");
	}
?>