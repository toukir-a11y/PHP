<?php

$filename = "file\data\data_write.txt";

file_put_contents($filename,"white"); // by default he didn't save previous data he  over white all data
file_put_contents($filename,"RED", FILE_APPEND); // if u save existing data use fileappend .
file_put_contents($filename,"blue", FILE_APPEND);
file_put_contents($filename,"black", FILE_APPEND| LOCK_EX); // lock_ex using ignore race condition


?>

?>