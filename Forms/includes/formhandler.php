<?php

var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $firstName = htmlentities($_POST["firstname"]);
    $lastName = htmlentities($_POST["lastname"]);
    $favouritePet = htmlentities($_POST["favouritepet"]);

    if(empty($firstName)) {
        exit();
        header("Location: ../indext.php");   
    }

    echo "<br> DATA <br>";
    echo "<br> $firstName, $lastName, $favouritePet";
    
    header("Location: ../indext.php");
}else {
    header("Location: ../index.php");
}