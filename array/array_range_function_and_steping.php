<?php

// $number = array(

//     12, 13, 14, 15, 16, 17, 18, 19, 20

// );


//print_r($number);

// $number= array();

// for($i=12; $i<26; $i++){
//     array_push($number, $i);
// }

// print_r($number);

 $wp = range(12, 20);

// print_r($wp);


foreach( range(1, 20,2) as $wps)
{
   //echo( $wps)."\n";
}


foreach($wp as $wps)
{
    echo $wps."\n";
}