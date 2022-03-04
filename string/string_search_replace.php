<?php

    $string = "A quick brown  Brown fox jumped over the lazy dog";


    $replace = str_replace('brown', 'black', $string);

    echo $replace."\n";

    $case_replace = str_ireplace("brown", "black", $string, $count); // for case sensitive string replace
    
    echo $case_replace."\n";


    $multiple_replace = str_ireplace(array("brown", "fox"), array("black", "cat"), $string); // for multiple replace 

    echo $multiple_replace;


?>