<?php


/* 

 array is mutible that's means array any ofset value changeable like that variable vaule change 

 array_shift - for delete 1st element of array
 
 array_unshift 

 array_push

 array_pop- for delete last element of array

 */



$args = array(

    "first",
    "second",
    "third",
    "fourth"
);

$args[1] ="2nd"; // change always before loop
$args[3]= "four"; 


array_shift($args); // for delete 1st ofset
array_pop($args); // for delete last ofset 


$args[] = "first"; // add new element in last offset
array_push($args, "last element"); // add new element in last element 

array_unshift($args, "new element add on first offset");// array unshift means you use multiple time array unshift always add new elements on 1st offset.

$count = count($args);
for ($i = 0; $i<$count; $i++ )
{
    echo $args[$i]."\n";
}





