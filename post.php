<?php
	if(isset($_POST['submit'])){
    $userIP = $_SERVER["http://ssb-24.ch"];
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = "6Lf-NDQUAAAAAG7mjqGHmxV_7CydbRKnKlrC2l8Q";
    $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");

    if(!strstr($request, "true")){
        echo "reCAPTCHA validation failed";
    }
    else{
        if(isset($_POST['submit'])) {
		$emailbody = 
		'<h1>SSB-24.CH</h1><span style="color:Brown">Name: </span>'.$_POST['name']."<br>"
		.'<span style="color:Brown">Vorname: </span>'.$_POST['vorname']."<br>"
		.'<span style="color:Brown">Adresse: </span>'.$_POST['adress']."<br>"
		.'<span style="color:Brown">Plz: </span>'.$_POST['plz']."<br>"
		.'<span style="color:Brown">Email: </span>'.$_POST['email']."<br>"
		.'<span style="color:Brown">Telefonnummer: </span>'.$_POST['tel']."<br>"
		.'<span style="color:Brown">Beschreibung: </span>'.$_POST['text']."<hr>"
		.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';

		mail('info@ssb-24.ch', '-> SSB-24 WEB', $emailbody ,'Content-Type: text/html; charset=UTF-8');
		header("Location:./index_danke.html");	
		}
    }
}
?>


