<?php


$random = mt_rand(0, 25);
//echo $random;

$number = range(20, 50);

//echo $number[$random];

$luck = mt_rand(0, 30);

if($luck %2== 0)
{
    echo "win";
}
else 
{

    echo "lose";
}


