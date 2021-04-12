
<?php
echo "Er is een mail naar u verzonden.";
$aanmelden = "Aanmelden voor Duurzaam Huis";
$email = "22503@ma-web.nl";
$onderwerp = "Aanmelden duurzaamhuis";
$bericht = "U heeft zich aangemeld voor het project 'Duurzaam Huis'<HR>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Raphael Rebel <22503@ma-web.nl>' . "\r\n";  //vul hier je eigen ma-adres in


mail($email, $onderwerp, $bericht, $headers);
?>


