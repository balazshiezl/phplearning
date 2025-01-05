<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label for="">Jelszó</label>
        <input type="text" name="jelszo">
        <label for="">felhasznalónev</label>
        <input type="text" name="felhasznalo">
        <input type="submit" name = "login" value="Log In">
    </form>
</body>
</html>


<?php
    /*
    $username = $_POST["felhasznalo"];
    $password = $_POST["jelszo"];
    echo"{$username}";
    if(isset($username) && isset($password)){
        echo"everything is fine";
    }else{
        echo"something is missing";
    }
    */

    
    foreach($_POST as $key => $value){
        echo"{$key}={$value} <br>";
    }
        

    if (isset($_POST["login"])){
        $username = $_POST["felhasznalo"];
        $password = $_POST["jelszo"];

        if(empty($username)){
            echo"Your username missing";
        }elseif(empty($password)){
            echo"Your password missing";
        }else{
            echo"Hello {$username}";
        }

    }


?>