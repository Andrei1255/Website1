<html>

<head>

<title>Send E-mail</title>

</head>

<body>

<?php $name = $_POST["firstname"];

	$name2 = $_POST["lastname"];

	$country = $_POST["country"];

	$subject = $_POST["subject"];

	$text = $_POST["text"].'\n From: '.$country;

	if(strlen($subject) > 0 && strlen($text) > 0)

	{
	
		$headers = "From: ".$name." ".$name2;

		mail("andrei_p01@yahoo.com",$subject,$text,$headers);

		echo "Uw bericht is verzonden !";

		?><br><?php echo $text;

	} 

	else

	{

		echo "Error ! Lengte van onderwerp / bericht is te kort.";

	} ?>

</body>

</html>