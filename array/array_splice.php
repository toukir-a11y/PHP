<?php

// array splice 

$data =[

    'a'=>'apple',
    'b'=>'ball',
    'c'=>'cat',
    'd'=>'doll',
    'e'=>'egg'
];


//$a= array_splice ($data, 2,2); //when you array splice , extract data form main array 
//print_r ($a);
//print_r($data);

$adddata= array('tea','coffe','juice'); // when data splice and same position new data add 
$newdata= array_splice($data, 1,3,$adddata );

print_r ($newdata);
print_r ($data);





?>