<?php
    $name = "Balazs";
    $food = "pizza";
    $email = "fake@gmail.com";

    $age = 24;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    //dollár
    $price = 4.99;

    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your name is {$email}<br>";
    echo "Your age {$age}<br>";
    //itt kell a \$ azért hogy lehessen dollárt írni
    echo "Your {$food} is \${$price}<br>"; 
    //nem látszódik mert false. Ha true akkor 1-et ír.
    echo "Online status: {$online}<br>";

?>