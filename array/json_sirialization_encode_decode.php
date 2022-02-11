<?php

$student= array (

'name'=>'toukir',
'roll'=>'235524',
'dept'=>'computer',
'shift'=>'second'

);
print_r ($student);


//echo $student ['name'].$student ['roll'];
//printf("%s %s ", $student['name'], $student ['roll']);


// way to string to array 

$data = serialize ($student);
echo $data ;

$new= unserialize($data);
print_r ($new);

// using json 

$result = json_encode ($student);
echo $result;