<?php 
	if (isset($_POST("submut"))) {
		mail('info@brickstone.design', '-> Kontakt FLORIANOV DVOR WEB', $emailbody ,'Content-Type: text/html; charset=UTF-8');
		header("Location:./index.html");
	}
?>