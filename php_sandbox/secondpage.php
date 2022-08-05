<html>
<title> Second page</title>

<body>

    <?php
        // this is an extenstion of the first page.
        // to demonstrate GET command
        // since the values are stored in an array you can access it using a key value pair way (assocative array).

        print_r ($_GET)."<br>";

        $name = $_GET['name'];
        $id = $_GET['id'];

        echo "name is " . $name . " and id is " . $id ."<br>";
        // here you can send a message from one page to another.    
    
    ?>


    

</body>
</html>