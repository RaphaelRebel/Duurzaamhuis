<HEAD>
<?php 
session_start();
?>
</HEAD>
<BODY>   
<?php
    $gebruikersnaam = $_POST['user'];
    $wachtwoord = $_POST['pass'];

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "flex";

    $mysqli = new mysqli($host,$user,$pass,$db);
    if ($mysqli -> connect_errno)
    {
        echo "fout met connectie db:" . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM users WHERE username ='$gebruikersnaam'";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows == 0)
    {
        echo "gebruiker niet bekend . $gebruikersnaam";
        exit();
    } 

   $gebruiker = $result -> fetch_assoc();
   $wachtwoord_juist = password_verify($wachtwoord, $gebruiker['password']);
    $result  -> free_result();
    $mysqli -> close();

    
    
    if($wachtwoord_juist == TRUE)
    {
       echo "Je bent ingelogd<hr>";
       $_SESSION['username'] = $gebruikersnaam;
       echo "Klik <a href ='next.php'>hier</a> om naar de volgende beveiligde site te gaan";       
    }
    else
    {
        echo "Inloggen is mislukt. <br><a href ='login.html'>Klik hier</a> om terug te gaan.";
        
    }
?>


</BODY>
</HTML>