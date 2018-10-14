<?php
date_default_timezone_set("America/Mexico_City");
$TimeStamp = "The current time is: " . date("l jS \of F Y h:i:s A");
file_put_contents('dataDisplayer.html', $TimeStamp,FILE_APPEND );

	
$var1 = $_POST['Name'];
$var2 = $_POST['Email'];
$var3 = $_POST['Telephone'];
$var4 = $_POST['Subject'];
$var5 = $_POST['Message'];

$WriteMyRequest2=
"<p> Name : "       . $var1 . " </p>".
"<p>Email : " . $var2 . "  </p>".
"<p>Telephone : " . $var3 . " </p>".
"<p>Subject : "  . $var4 . " </p>".
"<p>Message : "  . $var5 . " </p><br/>";

file_put_contents('dataDisplayer.html', $WriteMyRequest2,FILE_APPEND );


if( $_POST["Name"] || $_POST["Email"] || $_POST["Telephone"] || $_POST["Subject"] || $_POST["Message"] ) 
   {
   	header('Location: https://www.corporativo-syf.com/contact.html');
   }
	  


?>