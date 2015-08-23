<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$number=$_POST['inputnumber'];

$result= new NumberFormatter("en", NumberFormatter::SPELLOUT);

echo "Your number in words is" . $result->format($number);



?>


</body>
</html>