<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name = "country">
        <input type="submit">
    </form>
    
</body>
</html>





<?php

    //countries -> capitals
    $capitals = array("USA"=>"Washintong D.C.",
                        "Japan"=>"Kyoto",
                        "South Korea"=>"Seoul",
                        "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo $capital;
?>