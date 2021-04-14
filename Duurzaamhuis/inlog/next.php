<HTML>
<HEAD>
<?php 
session_start();
?>
<link rel="stylesheet" href="../style/next.css">
</HEAD>
<BODY>
    <div id="container">
    <?php
    if(isset($_SESSION['username']))
    {
        
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
 </div>
 </BODY>
</HTML>