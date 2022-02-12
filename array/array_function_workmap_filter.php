<?php

$data = array ( 1,2,3,4,5,6,7,8,9,10);
    
   function topu ($n){

       echo $n*$n . "\n";
   }

array_walk($data,'topu');  // work to every single element in array .


function wp ($n){
return $n*$n*$n;
}

$newarray=array_map ('wp',$data);

print_r($newarray);  // return value 

print_r($data); // no change main array 


function even ($n){
    return $n%2==0;
}

$af= array_filter($data, 'even');  // array filter return just true value 

print_r ($af);


$student = array ("topu", "toukir", "remon" , "niran", "sabbir");

function fill ($n){
    return $n[2]=='s' || $n[4]=='m';
}

$add = array_filter ($student, 'fill');

print_r ($add);
?>