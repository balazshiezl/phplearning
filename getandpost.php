<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getandpost.php" method="post">
        <label for="">quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php

    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
    echo"You have ordered {$quantity} x {$item}/s";
    echo"Your total is {$total}";

    /*
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    */
?>


