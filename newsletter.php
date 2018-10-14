<?php
date_default_timezone_set("America/Mexico_City");
$TimeStamp = "The current time is: " . date("l jS \of F Y h:i:s A");
file_put_contents('correosinscritos.html', $TimeStamp,FILE_APPEND );

	
$var1 = $_POST['mail'];


$WriteMyRequest2=
"<p> Name : "       . $var1 . " </p>";

file_put_contents('correosinscritos.html', $WriteMyRequest2,FILE_APPEND );


if( $_POST["mail"]) 
   {
   	header('Location: https://www.corporativo-syf.com');
   }
	  
?>

