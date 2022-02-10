<?php

$args = array(

    "toukir",
    "touki@wppool.dev",
    1798202602,
    "Wppool",
    "support",
    
);

echo $args[0]. "\n";

// you can easily count how much element in this array using count php build in count() function 

//ex:
 
echo count($args). "\n";

// most usefull php build in function is var_dump() you can check every thing using var_dump();

var_dump($args);


// when you can print a full array using loop 

// ex: 

for ($i=0; $i<count($args); $i++)
{
    echo $args[$i]. "\n". "\n";
}



// another way 

$count = count($args);

for ($i=0; $i<$count; $i++)
{
    echo $args[$i]. "\n";
}


// when you're try to reverse 

for ($i= $count-1; $i>=0; $i--) // $i -1 one because ofset start is a 0 that's why count - 1
{
    echo $args[$i]."\n";
}