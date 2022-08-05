<?php

    $ages = array (88,23,45,67);
    echo current($ages)."<br>";
    echo next ($ages)."<br>";
    echo next ($ages)."<br>";
    echo next ($ages)."<br>";
    echo reset($ages)."<br>";

    while ($age = current($ages)) {
        # code...
        echo $age . ":";
        next($ages);
    }

 // this is helpful esp when working with a database.
 // here the pointer does return a value not the index therefore we have used it to set the value to a variable and see if it still have some thing to point at the array.
 
?>