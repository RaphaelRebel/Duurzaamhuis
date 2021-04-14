
<html>
    <head>
        <link rel="stylesheet" href="../style/logout.css">
    </head>
    <body>
        <div id="container">
            <?php
            session_start();
            unset($_SESSION['username']);
            echo"U bent uitgelogd <a href='../index.html'>klik hier om weer in te loggen</a>";

            ?>
        </div>
    </body>
</html>