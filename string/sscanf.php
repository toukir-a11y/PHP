<?php

$demo = "fname lname 01787567898 example@gmail.com";

$parts = sscanf( $demo, "%s %s %11s %s");

print_r($parts);


echo "\n";


sscanf( $demo,"%s %s %11d %s", $fname, $lname, $number, $email); // for assign value in variable 

echo $email;


?>