<?php

// function type hinting that's mean which type of data accept this fucntion like int, string, etc. so we can define the value.


function factorial($number)
{
    $number = 1;

    for($i = $number; $i > 1; $i--)
    {
        $number *= $i;
    }

    echo $number;
}

 factorial(7);




