<?php

$random = array(

    'a' => 'apple',
    'b' => 'ball',
    'c' => 'cat'

);


//echo $random['b'];


$new = array_rand($random); // new as a key
// echo $new;

echo $random[$new]; // when we Caught the key we print value easily