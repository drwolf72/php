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
		if ((($birthmonth == "april") && ($birthday >="20")) || ($birthmonth == "may" && ($birthday >="1" && $birthday <="20")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Taurus</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "may") && ($birthday >="21")) || ($birthmonth == "june" && ($birthday >="1" && $birthday <="20")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Gemini</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "june") && ($birthday >="21")) || ($birthmonth == "july" && ($birthday >="1" && $birthday <="22")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Cancer</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "july") && ($birthday >="23")) || ($birthmonth == "august" && ($birthday >="1" && $birthday <="22")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Leo</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "august") && ($birthday >="23")) || ($birthmonth == "september" && ($birthday >="1" && $birthday <="22")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Virgo</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "september") && ($birthday >="23")) || ($birthmonth == "october" && ($birthday >="1" && $birthday <="22")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Libra</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "october") && ($birthday >="23")) || ($birthmonth == "november" && ($birthday >="1" && $birthday <="21")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Scorpio</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "november") && ($birthday >="22")) || ($birthmonth == "december" && ($birthday >="1" && $birthday <="21")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Sagittarius</h2>";
		}
		else
		{
			echo "<br>";
		}
		if ((($birthmonth == "december") && ($birthday >="22")) || ($birthmonth == "january" && ($birthday >="1" && $birthday <="19")))
		{
			echo "<br>";
			echo "<h2>your astrological sign is Capricorn</h2>";
		}
		else
		{
			echo "<br>";
		}




		?>

</div>


</body>
</html>


