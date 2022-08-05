<?php

// this are called user-defined function.

    function hello () {

        echo "this is to test just if the function works" . "<br>";

    }
    hello();

    // this one takes argumnets.

    function calc ($var_a , $var_b){

        $sum = $var_a + $var_b;
        $mul = $var_a * $var_b;
        $sub = $var_a - $var_b;
        $div = $var_a / $var_b;

        $res = array ($sum , $sub , $mul ,$div);
        return $res;
        // return is needed if : 
            // 1, you wanted to use the final value of the function for latter use
            // 2, it meanse exit out of the function.
                // this is use full especially when you want to exit out of a function based on some cases and have a return value at some point.
                // or if none of them are happening then return a value like false.
            // 3, as a good habbit have at least return true.

            // tips :
                // return only have contains one value.
                    // if there are many values then use array to store the values.
                // use the returned value and do something with it.

    }
    
    $test = calc(10,5);
    echo $test[0] . " is the sum" ."<br>";
    echo $test[1] . " is the differnce" ."<br>";
    echo $test[2] . " is the product" ."<br>";
    echo $test[3] . " is the division" ."<br>";
    
?>

<?php
// Global variables

// any variable that has been set outside any funtion is called a global variable.
    // there are two usages of it.
        // 1, use the global var inside a function.
        // 2, store the return value from the function to the global var.

        $globalTemprature = 100;
            // in degree celcius
        
            function kelvin ($a) {
                global $globalTemprature;
                    // use the global term to use the global values.
                $globalTemprature = 120;
                    // you can set the value of the global variable.
                $a = $globalTemprature;
                return $a;
            }

            $kelvinres = kelvin(20);
            echo $kelvinres . "<br>";

            echo $globalTemprature ."<br    >";

    // or use the second method and store the retuned value to the global variables.

    function tokelvin ($b){

        $b = 130;
        return $b;
    }
    $globalTemprature = tokelvin(10);
    echo $globalTemprature . "<br>";
?>

<?php
// default variables

function color ($room = "office" , $colorOfRoom = "blue"){
    echo "the room is " . $room . " and its color is ". $colorOfRoom ."<br>";

}
color ("classroom", "red");
    // mind the order you set the default values.



?>