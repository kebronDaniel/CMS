<?php

    $server = "localhost";
    $username = "root";
    $password = "root";
    $db = "netandcom";

    $connection = mysqli_connect($server , $username , $password , $db);

    if(!connection){
        echo "Database connection Failed" . mysql_error() . "<br>";
    }
    else echo "successfully connected to netandcom database" . "<br>";

    

    // as a good practice save this page and include this when ever you want to connect to this database.

?>
