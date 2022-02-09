        <?php

        require_once "functions.php";

        function evenodd($one) // parameter
        {
            if ($one%2==0)
            {
                echo "is even number";
            }
            else 
            {
                echo "is odd number";
            }
        }

        evenodd(3); //argument


        echo "\n";

        $wp = 4;

        if( darkmode($wp) ) 
        {
            echo "dark  mode";
        }
        else
        {
            echo "light mode";
        }

        echo "\n";


        // function accept 2 parameter

        function robot($a,$b)
        {
        if($a=="apple")
        {
            echo "is an apple";
        }
        elseif($b == "ball")
        {
            echo "is a ball";
        }
        else 
        {
            echo "don't know what about it";
        }
        
            
        }

        
        $apple = "apple";
        $ball = "ball";

        robot($apple, $ball);