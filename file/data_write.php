<?php

    $filename = "file\data\data_write.txt";


    $fp = fopen($filename, 'w');

    $write = fwrite($fp, "Hello wppool");

    $write = fwrite($fp, "Hello world \n");
    $write = fwrite($fp, "Hello wp dark mode");


    $fp = fopen($filename, 'a');

   // $write = fwrite($fp, "Hello wppool");

    $write = fwrite($fp, "Hello world \n");
    $write = fwrite($fp, "Hello wp dark mode");

   