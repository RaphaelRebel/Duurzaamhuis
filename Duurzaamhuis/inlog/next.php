<HTML>
<HEAD>
<?php 
session_start();
?>
</HEAD>
<BODY>
    <?php
    if(isset($_SESSION['username']))
    {
        echo "Hier komt de content voor de ingelogde user<br> ";
        $username = $_SESSION['username'];
        // echo $_SESSION['username'];
        echo "Welkom " . $username . "</br>";
        echo "Ga naar  <a href='../main.php'> onze website </a>";
    }
    else
    {
        echo "Je bent uitgelogd";
    }
 ?>
 </BODY>
</HTML>