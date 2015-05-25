<!DOCTYPE html>
<html>
<head>
	<title>Astrological Sign Generator</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
</head>
<body>

			<h1>Welcome to Astrological sign generator</h1>


<div class="container">

		<?php

		$birthmonth = $_POST["firstname"];
		$birthday = $_POST["number"];

		echo "Thank you   "   .   "  according to your birthday of:  "   . $_POST["firstname"] . ""  . $_POST["number"];


		if ((($birthmonth == "january") && ($birthday >= "20")) || ($birthmonth == "february" && ($birthday >= "1" && $birthday <= "18")))
		{
			echo "<br>";
			echo "<h2>Your astrological sign is Aquarius</h2>";
		}
		else
		{
			echo "<br>";
			//echo "blah";
		}
		if ((($birthmonth == "february") && ($birthday >="19")) || ($birthmonth == "march" && ($birthday >="1" && $birthday <= "20")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Pisces</h2>";

		}	
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "march") && ($birthday >="21")) || ($birthmonth == "april" && ($birthday >="1" && $birthday <="19")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Aries</h2>";
		}
		else
		{
			echo "<br>";
		}

		?>

</div>


</body>
</html>


