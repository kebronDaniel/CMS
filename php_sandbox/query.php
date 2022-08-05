<?php

include ('databases.php');
    // the variable that is used to store the result takes two argumnents
    // the first one is the query and the connection.

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    
    echo "here is the table"."<br>";

    if (!$result) {
        echo "there is no result found";
    }
    // to display the result you need to treat it as an associative array.
    
         while ($row = mysqli_fetch_assoc($result)){
            echo $row ["username"] ."  ". $row ["password"] ."<br>";
        }
    

?>
<?php

mysqli_close($connection);
// $connection is not really needed as long as we have included a specific connection.
?>