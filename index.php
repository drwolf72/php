<!DOCTYPE html>
<html>
<head>
	<title>Astrological Sign Generator</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet"  type="text/css" href="css/bootstrap.css" media="screen" />
</head>
<body>

			<h1>Welcome to Astrological sign generator</h1>

			<div class="container">

				<form method="post" id="form" action="result.php">
					<h2>Please enter your full name</h2>
						<input id="flnm" type="text" name="fullname" />
					<h2>Please enter your Month of Birth</h2>
						<input id="fn" type="text" name="firstname" />
					<h2>Please enter your day of Birth</h2>
						<input id="nm" type="text" name="number" />
						<input type="hidden" name="astrological" />
						<input type="submit">
				</form>

				<button class="btn btn-default"><a href="data.php">Data</a></button>

			</div>


			<?php

			$con = mysqli_connect("db549918911.db.1and1.com", "dbo549918911", "LearningIsFun28", "db549918911");

				if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}



				/*$sql = "CREATE TABLE 
							Birthdays
								(fullname CHAR(30), firstname CHAR(30), birthdate INT, newBirthday INT, oldBirthday INT) ";*/
				

				/*$sql = "CREATE TABLE 
							Inventory2
								(InventoryID INT, productSKU VARCHAR(30), productName VARCHAR(30), productSize VARCHAR(30), startCount INT, currentCount INT, wholePrice REAL, retailPrice REAL, Cost REAL)";*/

			
				
				/*$sql = "ALTER TABLE Inventory2 DROP startCount";*/
				/*$sql = "ALTER TABLE Birthdays ADD astrological2 VARCHAR(30)";*/
			/*$sql = "DELETE FROM Birthdays";*/
				/*$sql = "ALTER TABLE Birthdays MODIFY birthdate INT DEFAULT NULL";*/


				/*if (mysqli_query($con, $sql))
				{
					echo "delete table sucessful";
				}
				else
				{
					echo "error creating table" . mysqli_error($con);
					
				}*/




			?>





</body>
</html>