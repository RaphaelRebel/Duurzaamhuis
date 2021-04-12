<?php
session_start();
unset($_SESSION['username']);
echo"U bent uitgelogd <a href='../index.html'>klik hier om weer in te loggen</a>";

?>