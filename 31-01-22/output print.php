<?php
    /* php data type 
    
        integer / int
        float/ dubble
        boolean
        string
        array 
        object 
        resource
        null 
    
    */

$example = "dhaka";
echo "we are living in $example";
echo "\n";  //for line braek 
echo "we are living in {$example} \n"; // starndard way to print string with variable


// printf functin 


$name =  "toukir";
$dept = "support";

printf( "his name is %s and he work %s %s\n", $name, $dept,"team" );

// same thing you can print three way 


echo "his name is $name and he work with $dept team\n";
echo "his name is {$name} and he work with {$dept} team\n";
echo "his name is ".$name." and he work with ".$dept." team\n";
printf("his name is %s and he work with $dept team\n", $name);
printf("his name is %s and he work with %s team", strtoupper($name), $dept); // you can use any function using printf function 

?>