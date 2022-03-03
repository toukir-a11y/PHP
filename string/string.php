<?php

$string = "hello world";

$new_string = 'string value is $string' ; // when you using '' in string is not effect variable and other thing is treat is string 



$n_string = "new value of string $string \n";


echo $new_string. "\n";

echo $n_string;

// heardoc 


$heardoc = <<<EOD

new line one $string

new line two 

new line three  

EOD;

echo $heardoc;


// nowdoc is not effected any \n \t element   

$heardoc = <<< 'EOD'

new line one $string

new line two 

new line three  

EOD;

// NB : when using heardoc or nowdoc last marker EOD start new line without any space 

?>

