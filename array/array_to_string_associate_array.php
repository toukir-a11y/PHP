<?php

$plugin = array(

    "darkmode" => "wp_dark mode",
    "evr" => "easy video review",
    "jitsi"=> "jitsi meet",
    "sheets"=> "sheets to wp table",
    "cwmm"=> "chat widgets"
);

print_r($plugin);

//echo $plugin["evr"];

$ats = serialize($plugin); // for associative array using serialize and unserialize array to string and string to array
echo $ats;

$sta = unserialize($ats);
print_r($sta);


// using json encode decode bcz when using json we can directly use this array in javescript


$json = json_encode($plugin);
print_r($json);


$json_decode = json_decode($json, true); // using true bcz when covert string to array using by json_decode return object then fix to array using true

print_r($json_decode);
