<?php
// arithmetic operator +-*/% 

// assignment operatot  += -= *= \= 


// addition

$add = 10+10 ;
 
echo $add;

// another way to adddition 

$add +=10;
echo "$add \n"; 
//subtraction 

$add -=10 ;
echo $add;

// multiplication
$add *= 10;
echo $add;

// division

$add /= 10;
echo "$add\n";

// modulas 

$mod = $add % 3;
echo "$mod\n";

// ++ and --

$number = 10 ;

$number++;// value with +1
echo $number;

$number--;

echo "$number\n"; //value - 1 

$n = 7;
$m= $n++;

echo $m, "\n", "$n\n";

//  $m = $n++
//  $m = $n;
//  $n = $n+1;

$n = 7;

$m = ++$n;

echo $m;
/*
    $n = 7;
    $m = ++n;

    $n = $n+1;
    $m = $n; 

*/