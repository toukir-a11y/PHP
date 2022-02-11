<?php

$drinks= array ('coffe','tea', 'juice', 'lemon_juice','milk', 'coke');
$number= array (15,6,45,93,2,67,56);
$data = [  'm'=>'mango', 'b'=>'plum', 'a'=>'dates',  'c'=>'cat',];
$newdata=  array ('apple', 'orange', 'ORANGE','APPLE' );

sort ($drinks);
print_r($drinks);

rsort($drinks); 

print_r($drinks); // show output reverse 


asort ($number);  // sort value not key but show accuall key number of value  .
print_r ($number);


arsort ($number);  // show  output reverse   .
print_r ($number);


sort($number); 

print_r ($number); // sort value but not show accual key number show default key 


ksort($data);// sort by key 
print_r ($data); 

krsort($data);

print_r ($data);

sort($newdata, SORT_STRING |SORT_FLAG_CASE); 


print_r($newdata);  // sort with insensitive case 





?>