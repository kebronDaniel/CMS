<?php
    //logical operators.
        // && for and 
        // || for or.
        // you can connect two conditions using them.

    // while using a condtion to work with loops or if statments you can use.
        // type checking : is_int(name of the variable); inside the condtion brackes.
        
        
    //SWICHES.
        // use to test one value with several values
        $var_a = 10;
        
        switch ($var_a) {
            case 9:
                # code...
                echo ("the value is not 10") ."<br>";
                break;
            
            default:
                # code...
                echo "the value is ". $var_a . "<br>";
                break;
        }

     // LOOPS
        // While loops.
            // you can use if inside a while loop.
                // whlie is like a big condition and the if is the smaller one
                    // you can have several executes on one while condition cycle.

        // for loop
            echo "for loop". "<br>";
            for ($i = 0 ; $i < 10  ; $i++  ) { 
                echo $i;
                echo "<br>";    
            }
        
        // for each loop
            echo "for each loop"."<br>";
            $var_d = array (1,11,2,22,3,33);
            
            foreach ($var_d as $var_each) {
                # code...
                echo $var_each . "<br>";
            }
                // for each using an associative array.
                $var_asso = array ("name" => "kebron", "department" => "IT");
                foreach ($var_asso as $key => $value) {
                    # code...
                    echo "hello" . "<br>";

                    // if its an associated array then you should place a new holder for the new key and value.
                }

                //for each using an if statment

                $priceForBook = array ("C++" => 2000 , "Java" => 50 , "python" => "sold");

                foreach ($priceForBook as $key => $value) {
                    # code...
                    if(is_int($value)){
                    echo ($key . " : " . "has the value of " . $value)."<br>";
                    } else {
                        echo "its sold out". "<br>";
                    }
                }


        //coutinue
                // implicitly every loop has a coutinue statment but you can put anywhere else.
                // because you can skip any part that you dont like.

                for ($j=0; $j < 5 ; $j++) { 
                    # code...
                    if ($j == 3){
                        continue;
                    }   
                    echo "here is : " . $j . " ";
                }
        // break
            // to stop the loop where ever we wanted.

        // pointers: for example when we loop using a foreach the pointer moves from the first to the second and ...
                // one good application for this is to use it for checking weather an array has a value.
                // we use many built-in funcyions around it.
                    // current, next or reset.
                
                $ages = array (88,34,12,83);
                echo current($ages);
                echo next($ages);
                echo reset($ages);
                while ($age = current($ages)){
                    // this while loop doesnt return a boolean.
                    // but it checks the weather the pointer doesnt point to nothing.


                }


?>