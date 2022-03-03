<?php

$string = "hello wppool";


$length = strlen($string) -1;

for( $i = $length; $i>=0; $i--)
{
    echo $string[$i];
}

echo "\n";

$length = strlen($string);

for($i= 1; $i<= $length; $i++)
{
    echo $string[$i *-1];

}

echo "\n";

echo strrev($string);

