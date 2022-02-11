<?php


$data = array ('a','b','c','d','e','f','g','h');
//print_r ($data);


$nice = array_slice($data, 4, -1);  
print_r ($nice); 

$nice = array_slice($data,-4, -2, true);  // when u use true print correct index number .
print_r ($nice); 



$new = [
'a'=>10,
'b'=>20,
'c'=>30,
 12 =>40 ,
'd'=>30   
];
 
$f=array_slice ($new , 1);
print_r($f);

 $f=array_slice ($new , 1, null,true); // when u show key wise data use null true
print_r ($f);

?>