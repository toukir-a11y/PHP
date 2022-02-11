<?php

// array to string to array 

$string = "one, two, three, four, five";

echo $string."\n";

$sta = explode(', ', $string); // string to array using php build in function explode()

echo $sta[0]."\n";

$count = count($sta);

for($i=0; $i<$count; $i++)
{
    echo $sta[$i]."\n";
}


$ats = join(', ', $sta); // array to string using php build in function join()

print_r($ats)."\n";
 

// accept multiple delimiter


$multiple = preg_split( '/(, |,)/',"hello, world, we are,wppool"); 

print_r($multiple);

