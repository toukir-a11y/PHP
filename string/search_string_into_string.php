<?php

$string = "we live  In  Dhaka bangladesh ";


echo strpos($string, "in"); // case sensitive 


//echo stripos($string, "we")."\n"; // for without case sensitive


$offset = strripos($string, "dhaka");// when we search character from reverse use strripos



echo $offset."\n";


if( $offset !== false)// when using strpos and search start element must be check type bcz 0 = false 
{
    echo "string was found";
}
else
{
    echo "sting was not found";
}


// string wordwarp


$warp = "A quick brown  fox jumped over the lazy dog" ;


echo wordwrap($warp, 7, "</br>", true);