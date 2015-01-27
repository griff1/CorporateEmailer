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
	array_push($emails, $firstname . $lastname . "@" . $domain);
	array_push($emails, $firstname . $lastname . "@" . $domain);
	array_push($emails, $firstname . $lastname . "@" . $domain);

}