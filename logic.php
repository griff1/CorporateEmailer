<?php
	$firstname = htmlspecialchars($_POST['firstname']);
	$lastname = htmlspecialchars($_POST['lastname']);
	$company = htmlspecialchars($_POST['companyname']);
	$domain = htmlspecialchars($_POST['domain']);
	$yourco = htmlspecialchars($_POST['yourco']);
	//$del = $_POST['client'];
	if(isset($_POST['Submit']))
	{
		$emails = [];

		array_push($emails, $firstname[0] . $lastname . "@" . $domain);

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
		//if($del == "gmail")
		//{
		//	$delimiter = ", ";
		//}
		for($i = 1; $i < count($emails); $i++)
		{
			if($string_version == "")
				$string_version .= $emails[$i];
			else
				$string_version = $string_version . $delimiter . $emails[$i];
		}
		date_default_timezone_set('America/Los_Angeles');
		echo(date("l", time()));
		$day1 = date('l', time()+86400);
		$day2 = date('l', time()+86400*2);
		$bodyvalue = "$firstname - I hope this note finds you well. I wanted to introduce myself as a point of contact here at Summit Partners after coming across $company numerous times in my industry research. By way of background, we are a $16 billion investment firm and have been partnering with entrepreneurs for the past 30 years -- we have been fortunate to work with great teams at companies like FleetCor, Central Security Group, Belkin, Parts Town, Wilmar and Uber.%0A%0AI would appreciate the opportunity to exchange industry notes, learn more about your recent business momentum and to see if we here at Summit can be helpful in any way. We pride ourselves at Summit on being proactive in building relationships, so even if outside capital is not an immediate priority, it would still be great to connect. Do you have a few minutes on $day1 or $day2 for a quick call?%0A%0ABest Regards,%0A%0AEvan";
		$bodyvalue = str_replace(" ", "%20", $bodyvalue);

		//fopen("http://198.199.105.42/mailto:$emails[0]?bcc=$string_version&subject=$company%20|%20Summit Partners&body=Dear%20$firstname%20$lastname%20of%20$company,");
		echo("<a href=\"mailto: $emails[0]?bcc=$string_version&subject=$company%20|%20$yourco&body=$bodyvalue\"> Click here </a>");
		echo("<script>window.open(\"mailto: $emails[0]?bcc=$string_version&subject=$company%20|%20$yourco&body=$bodyvalue\");</script>");
	}
?>