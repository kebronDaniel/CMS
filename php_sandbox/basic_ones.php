<?php

    $string_a = "Hello";
    $string_b = "world";
    $int_a = 10;

    //concatinating strings. 
    $string_c = $string_a . $string_b ."<br>";

    echo $string_c;

    // array inside an array.

    $array_a = array(1,2,3,4,5);
    $array_b = array ("A" , "B" , array(12,13,14));

    echo "the second element of the " . $array_b[2]." is    " ;
    echo $array_b[2][1] . "<br>";

?>

<?php
        // php functions
        // for integers.

            $num_array = array (1,45,67,34,22);

            // min and max.
            echo ("Min of the array is " . min($num_array). "<br>"); // the same for max.

            //sort
            sort($num_array);
            print_r ($num_array)."<br>";  // the same for unsorting using rsort.
            //print_r is short for readable for readable array.

            //impolde : meaning change the array into a string by sepating the values using whatever you wanted.
            $imploded = implode("*",$num_array)."<br>";
            print_r ($imploded)."<br>";
            // the same is true for explode to reverse.

            $exploded = explode("*", $imploded);
            print_r ($exploded)."<br>";

            echo "<br>";
            //check weather a value exists or not.
            echo (in_array(1,$num_array).">>>one meanse 'True'.")."<br>";

    //BOOLEAN
            // for any varaiables you can use isset(name of the variable) or empty(name of the variable)
            // it returns a boolean statement like 1 or null or nothing.

    //TYPE CASTING
        // get type: to see what we are working with.
               echo gettype($int_a)."<br>";
        // set type : casting.
                settype($int_a , "string")."<br>"; 
                echo gettype($int_a) ."<br>";  
                //: or there is another way to do it.
                $var_a = (int) $int_a;
                echo $var_a ." ". gettype($var_a    )."<br>";
        // constants
                // you can use them for username and other things that you dont wan to change.
            define("MAX_VALUE",100);
            echo MAX_VALUE . "<br>";
                
                    

?>


<?php

        $test = "yonathan";

        // this methods are good for debugging.

       echo var_dump ($test). "<br>";
       $vars = get_defined_vars();
       echo $vars ."<br>";




?>