<?php
session_start();
?>
<html>

<title> sessions</title>

<body>
    
    <?php
        $_SESSION['first_name'] = "Kebron";
        $_SESSION['last_name'] = "Daniel";
    ?>

    <?php
    $name = $_SESSION['first_name'] . " " . $_SESSION   ['last_name'];
    echo $name;
    
    ?>

</body>
</html>