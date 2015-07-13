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

		if (ctype_digit($birthday) && is_string($birthmonth)) 
		{


					if ((($birthmonth == "january") && ($birthday >= "20" && $birthday <= "31")) || ($birthmonth == "february" && ($birthday >= "1" && $birthday <= "18")))
					{
						echo "<br>";
						echo "<h2>Your astrological sign is Aquarius</h2>";
					}
					else
					{
						echo "<br>";
						//echo "<h2>You have specified an invalid date</h2>";
						//echo "blah";
					}
					if ((($birthmonth == "february") && ($birthday >="19" && $birthday <= "28")) || ($birthmonth == "march" && ($birthday >="1" && $birthday <= "20")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Pisces</h2>";

					}	
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "march") && ($birthday >="21" && $birthday <= "31")) || ($birthmonth == "april" && ($birthday >="1" && $birthday <="19")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Aries</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "april") && ($birthday >="20" && $birthday <= "30")) || ($birthmonth == "may" && ($birthday >="1" && $birthday <="20")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Taurus</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "may") && ($birthday >="21" && $birthday <= "31")) || ($birthmonth == "june" && ($birthday >="1" && $birthday <="20")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Gemini</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "june") && ($birthday >="21" && $birthday <= "30")) || ($birthmonth == "july" && ($birthday >="1" && $birthday <="22")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Cancer</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "july") && ($birthday >="23" && $birthday <= "31")) || ($birthmonth == "august" && ($birthday >="1" && $birthday <="22")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Leo</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "august") && ($birthday >="23" && $birthday <="31")) || ($birthmonth == "september" && ($birthday >="1" && $birthday <="22")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Virgo</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "september") && ($birthday >="23" && $birthday <= "30")) || ($birthmonth == "october" && ($birthday >="1" && $birthday <="22")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Libra</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "october") && ($birthday >="23" && $birthday <= "31")) || ($birthmonth == "november" && ($birthday >="1" && $birthday <="21")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Scorpio</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "november") && ($birthday >="22" && $birthday <="30")) || ($birthmonth == "december" && ($birthday >="1" && $birthday <="21")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Sagittarius</h2>";
					}
					else
					{
						echo "<br>";
					}
					if ((($birthmonth == "december") && ($birthday >="22" && $birthday <="31")) || ($birthmonth == "january" && ($birthday >="1" && $birthday <="19")))
					{
						echo "<br>";
						echo "<h2>your astrological sign is Capricorn</h2>";
					}
					else
					{
						echo "<br>";
					}

		}
		else
		{
			echo "<h2>Date of birth must be a number, and Birth month has to be a month</h2>";
		}


		?>

</div>


</body>
</html>


