<html>

<title> cookies</title>

<body>
    
    <?php

        $var_one = 0;
        if (isset($_COOKIE['test'])) {

            //this statment allows not to show all the details of the result if there is no 
            # code...
            $var_one = $_COOKIE['test'];
        }
        echo $var_one;
    ?>

    <?php
        setcookie ('test', 0 , time()- 60);
    ?>


    <?php
    // generally cookies in this form are too vunerable to be killed or altered.
    // the better one than this is a SESSION.
    ?>
</body>
</html>