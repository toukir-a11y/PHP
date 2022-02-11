<?php

$number = array ('1'=> 'one', '2'=> 'two');
$newnumber = $number; // copy by value 

$newnumber  ['1'] = 'three';
$newnumber  ['2'] = 'flase';


print_r ($number) ;
print_r ($newnumber);



$number = array ('1'=> 'one', '2'=> 'two');
$newnumber = &$number; //copy by reference 

print_r ($number) ;
print_r ($newnumber);
