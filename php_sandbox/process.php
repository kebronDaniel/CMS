<html>

<title> Process the Form </title>

<body>
    
    <?php
    
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "{$username} : {$password}" . "<br>";

    ?>

</body>
</html>