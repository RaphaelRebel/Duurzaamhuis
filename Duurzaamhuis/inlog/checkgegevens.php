<?php
$username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $hash = password_hash($password1, PASSWORD_DEFAULT);
?>
<html>
    <head>
        <title>Zijn dit uw juiste gegevens?</title>
    </head>
    <body><center>
        <form action ="sendmail.php" method="POST">
        <input type = "text" name = "username" placeholder = "Gebruikersnaam" required>*<br><br>
        <input type = "text" name = "voornaam" placeholder = "Voornaam" required>*<br><br>
        <input type = "text" name = "achternaam" placeholder = "Achternaam" required>*<br><br>
        <input type = "email" name = "email" placeholder = "E-mailadres" required>*<br><br>
        <input type="password" name="password1" value="password1"><br><br>
        <input type="password" name="password2" value="password2"><br><br>
        <input type="hidden" name="code" value="L1GaCPLAC/qRRDod7Oo9OxahRcRIwI">
        <input type ="submit" value = "Akkoord"><br><br>
        
    </body>
</html>