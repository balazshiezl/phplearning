<?php 

    $foods = array("apple","orange","banana");

    array_push($foods ,"pineapple");
    //array_pop($foods);
    array_shift($foods);

    foreach($foods as $food){
        echo $food ."<br>";
    }

?>