<?php

$data = [

    "name" => "toukir",
    "ID"   => "12",
    "dept" => "support",
    "company" => "wppool"

];

//echo $data['name']."\n";

//echo strtoupper($data["company"]). "\n";


// one key under multiple value 


$gadgets = [

    "headphone" => "airpot, inpot, airbud",
    "laptop"    => "hp, lenovo, macbook",
    "mobile"    => "redmi, samsung, oneplus"

];

// add new value 


$gadgets["mobile"] .=", iphone";

 $key = array_keys($gadgets);

 print_r( $key[0]);

 $value = array_values($gadgets);
 print_r($value)."\n";

 print_r($value[0]);

// $value =  $gadgets['laptop'];

// echo substr($value,0,10);

// $abc = $gadgets['headphone'];
// $myArray = explode(',', $abc);
// print_r($myArray[0]);


//echo $gadgets["laptop"]."\n";

// when you want to see all array element using loop but not forloop, for associate array using foreach loop

// foreach ($gadgets key=> value )
// {
//     echo $key."=".$value[0]."\n";   
// }

// foreach ($gadgets as $gadget)
// {
//     echo $gadget[0];
// }