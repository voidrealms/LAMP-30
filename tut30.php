<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

 set_error_handler("customError");
 
function customError($errno, $errstring)
{
	echo "<b>Error:</b> [$errno] $errstring<br>";
	
	error_log($errstring,1,"bcairns@voidrealms.com","From: noreply@website.com");
	
	die("");
}

//trigger and error
$i = 3;

if($i > 5)
{
	echo "Do something<br>";
}
else
{
	trigger_error("I is less then 5");	
}


?>

</body>
</html>
