
<?php
   

$aanmelden = "Aanmelden voor Duurzaam Huis";
$email = $_POST['email'];
$onderwerp = "Aanmelden duurzaamhuis";
$bericht = "U heeft zich aangemeld voor het project 'Duurzaam Huis'<HR> Klik op <a href='signup.php?email=.$email'>deze link </a> zodat we uw e-mail kunnen verifiëren.<hr>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <b.gommers@ma-web.nl>' . "\r\n";


mail($email, $onderwerp, $bericht, $headers);
echo "Er is een mail naar u verzonden om u aan te melden.";
?>


