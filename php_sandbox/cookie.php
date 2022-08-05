<html>

<title> cookies</title>

<body>
    
    <?php
        setcookie ('test' , 22 , time()+(60*60*24*7));
        // the first one is the name and the value and the expiration date

        setcookie ('test_two' , "this is to show that values can also be string" , time() + (60*60*24*2));
        // this one has an expiration date of two days.

        // therefore you can set this value from a user input or you can set it by yourself by just calling setcookie();
    ?>

</body>
</html>