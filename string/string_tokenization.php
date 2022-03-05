<?php
$string = "Hello wppool, you are, great";

$token = explode( " ", $string );

//print_r($token);

$original = join( " ", $token );
//print_r($original);

echo "\n"; 

$join = join( " ", $token );

//print_r($join);

echo "\n";

$single_char = str_split($string);

//print_r($single_char);



$multiple = "Hello world. Beautiful, day today.";
 $token = strtok($multiple, " ,");
 
while ($token !== false)
   {
   echo $token."\n";

   $token = strtok(" ");
   }




