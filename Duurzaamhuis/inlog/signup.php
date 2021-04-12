<?php



    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $hash = password_hash($password1, PASSWORD_DEFAULT);

    
    $mysqli = new mysqli("localhost","root","root","flex"); // aanpassen voor MA-cloud
    
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    $sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `voornaam`, `achternaam`) VALUES (NULL, '".$username."', '".$hash."', '".$email."', '".$voornaam."', '".$achternaam."');";
    $result = $mysqli -> query($sql);


    $mysqli -> close();
    echo"U kunt <a href='../index.html'>hier</a> inloggen op de website";
  
    ?>
    