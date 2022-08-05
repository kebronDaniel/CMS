<html>
<title> first page</title>

<body>

    <a href = "secondpage.php?name=<?php echo urlencode("kebron Daniel")
        // this is not the raw url encoding but the normal encoding which puts + .
        // the raw encoding is the encoding used by the server which puts % and two Hexa's.
    ?>&id=1" > Second page </a>
    <br/>

    <?php
    // to escape (since html simply marks up all the text) all the html esp characters
    $linkref = "<click> here"
    ?>
    <a href = "thirdpage.php"> <?php echo $linkref
    // here the click is omitted.
    ;?>
    
    </a>
    <br/>

    <a href = "forthpage.php"> <?php echo htmlspecialchars($linkref);
    // its a good practice to do.
    
    ?></a>
</body>
</html>