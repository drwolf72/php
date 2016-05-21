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
		$con = mysqli_connect("db549918911.db.1and1.com", "dbo549918911", "LearningIsFun28", "db549918911");
		$fullname = $_POST["fullname"];
		$birthmonth = $_POST["firstname"];
		$birthday = $_POST["number"];
		$astrologicalS = $_POST["astrological"];


	

		$astrogoicalSigns = array('Capricorn', 'Aquarius', 'Pisces', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra','Scorpio', 'Sagittarius', 'Aries');


	


		
					echo "Thank you   "   .   $_POST["fullname"]  . "  according to your birthday of:  "   . $_POST["firstname"] . ""  . $_POST["number"];

						if (ctype_digit($birthday) && is_string($birthmonth)) 
						{


									if ((($birthmonth == "january") && ($birthday >= "20" && $birthday <= "31")) || ($birthmonth == "february" && ($birthday >= "1" && $birthday <= "18")))
									{
										echo "<br>";
										echo "<h2>Your astrological sign is</h2>" . "<h2>" . "Capricorn"  . "</h2>";

										/*$astrologicalX = "Capricorn";
										$astrological = mysqli_query($con, "INSERT INTO Birthdays (astrological) VALUES ('$astrologicalX')");
										echo "<h2>" . $astrologicalX . "</h2>";*/

							
										
										

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





<?php

$con = mysqli_connect("db549918911.db.1and1.com", "dbo549918911", "LearningIsFun28", "db549918911");



/*$pname = mysqli_escape_string($con, $_POST["fullname"]);
$pbirthmonth = mysqli_escape_string($con, $_POST["firstname"]);
$pbirthday = mysqli_escape_string($con, $_POST["number"]);
$pastrological2 = mysqli_escape_string($con, $_POST["astrological"]);*/
	$name = mysqli_escape_string($con, $_POST["fullname"]);
		$month = mysqli_escape_string($con, $_POST["firstname"]);
		$day = mysqli_escape_string($con, $_POST["number"]); 
		

			if ((($month == "december") && ($day >="22" && $day <="31")) || ($month == "january" && ($day >="1" && $day <="19")))
									{
										$astrologicalX = "Capricorn";
									}
									else
									{
										echo "<br>";
									}
			if ((($month == "january") && ($day >= "20" && $day <= "31")) || ($month == "february" && ($day >= "1" && $day <= "18")))
			{
										//echo "<br>";
										//echo "<h2>Your astrological sign is</h2>" . "<h2>" . "Capricorn"  . "</h2>";
										$astrologicalX = "Capricorn";
										/*$astrologicalX = "Capricorn";
										$astrological = mysqli_query($con, "INSERT INTO Birthdays (astrological) VALUES ('$astrologicalX')");
										echo "<h2>" . $astrologicalX . "</h2>";*/

							
										
										

			}
			else
			{
										echo "<br>";
										//echo "<h2>You have specified an invalid date</h2>";
										//echo "blah";
			}
			if ((($month == "february") && ($day >="19" && $day <= "28")) || ($month == "march" && ($day >="1" && $day <= "20")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Pisces</h2>";
										$astrologicalX = "Pisces";

			}	
			else
			{
					echo "<br>";
			}
			if ((($month == "march") && ($day >="21" && $birthday <= "31")) || ($month == "april" && ($day >="1" && $day <="19")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Aries</h2>";
										$astrologicalX = "Aries";
			}
			else
			{
										echo "<br>";
			}
			if ((($month == "april") && ($day >="20" && $birthday <= "30")) || ($month == "may" && ($day >="1" && $day <="20")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Taurus</h2>";
										$astrologicalX = 'Taurus';
			}
			else
			{
										echo "<br>";
			}	
			if ((($month == "may") && ($day >="21" && $day <= "31")) || ($month == "june" && ($day >="1" && $day <="20")))
			{
									//echo "<br>";
									//echo "<h2>your astrological sign is Gemini</h2>";
									$astrologicalX = 'Gemini';
			}
			else
			{
									echo "<br>";
			}
			if ((($birthmonth == "june") && ($birthday >="21" && $birthday <= "30")) || ($birthmonth == "july" && ($birthday >="1" && $birthday <="22")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Cancer</h2>";
										$astrologicalX = 'Cancer';
			}
			else
			{
										echo "<br>";
			}
			if ((($birthmonth == "july") && ($birthday >="23" && $birthday <= "31")) || ($birthmonth == "august" && ($birthday >="1" && $birthday <="22")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Leo</h2>";
										$astrologicalX = 'Leo';
			}
			else
			{
				echo "<br>";
			}
			if ((($month == "august") && ($day >="23" && $day <="31")) || ($month == "september" && ($day >="1" && $birthday <="22")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Virgo</h2>";
										$astrologicalX = 'Virgo';
			}
			else
			{
										echo "<br>";
			}if ((($month == "september") && ($day >="23" && $day <= "30")) || ($month == "october" && ($day >="1" && $day <="22")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Libra</h2>";
										$astrologicalX = 'Libra';
			}
			else
			{
										echo "<br>";
			}
			if ((($month == "october") && ($day >="23" && $day <= "31")) || ($month == "november" && ($day >="1" && $day <="21")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Scorpio</h2>";
										$astrologicalX = 'Scorpio';
										
			}
			else
			{
										echo "<br>";
			}
			if ((($month == "november") && ($day >="22" && $day <="30")) || ($month == "december" && ($day >="1" && $day <="21")))
			{
										//echo "<br>";
										//echo "<h2>your astrological sign is Sagittarius</h2>";
										$astrologicalX = 'Sagittarius';
			}
			else
			{
										echo "<br>";
			}





								
/*$astrologicalX = "Capricorn";





	/*$sql = "INSERT INTO Birthdays(fullname, firstname, birthdate, astrological)
			VALUES ('$pname', '$pbirthmonth', '$pbirthday', '$astrologicalX');";*/

	  $sql = "INSERT INTO Birthdays(fullname, firstname, birthdate, astrological) 
	  	     VALUES ('$name', '$month', '$day', '$astrologicalX')";



		if (!mysqli_query($con,$sql)) {
						die('Error: ' . mysqli_error($con));
					}
		
	


		//echo "1 record added";
		//echo "<br>";




mysqli_close($con);





?>


<?php  



$con = mysqli_connect("db549918911.db.1and1.com", "dbo549918911", "LearningIsFun28", "db549918911");


$display = mysqli_query($con, "SELECT * FROM Birthdays");



	echo  "<table class= \"table-bordered table-hover\"<tr>" . "<th>Name</th>"  .  "<th>Birthday Month</th>"  .  "<th>Birthday day</th>" .  "<th>Astrological sign</th></tr>";


	while ($row = mysqli_fetch_array($display))
	{


			echo "<tr><td>"  .  $row["fullname"]  .  "</td>"  .  "<td>"  .  $row["firstname"]  .  "</td>"  .  "<td>"   . $row["birthdate"]   .  "</td>"  .   "<td>"  .  $row['astrological']  .   "</td></tr>";

		

	}
	echo "</table>";
	

	/*foreach ($astrogoicalSigns as $value)
	{
		echo "$value <br>";
	}*/




?>

<!--<input type="text" value=<?php echo Birthdays[$astrologicalX]; ?>-->
	<button class="btn btn-default"><a href="index.php">Try again</a></button>

</div>


</body>
</html>


