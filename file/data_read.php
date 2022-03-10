
<?php


    $filename = "file\data\data.txt";

    //NB : set a condition this file is readable or not 

    //echo getcwd(); // for check current file directory path 

    $fp = fopen($filename, 'r');

    if( is_readable($filename) )
    {

    

    // $read = fgets($fp); for sigle line or mark how many character print 

    //echo $read;

    while( $read = fgets($fp) ) // when read to all data in file using loop
    {
        echo $read;
    }

    rewind($fp); // using for again start loop 

    while ($read = fgets($fp))
    {
        echo $read; 
    }

    fseek($fp, 12); // when we define courser pointer postion start from which postion 

    while ($read = fgets($fp))
    {
        echo $read; 
    }


    rewind($fp); // using for again start loop 

   // fseek($fp-1, SEEK_END); // FOR reading start from end 

    while ($read = fgets($fp))
    {
        echo $read; 
    }


    $read_all = file($filename); // for all file data read 

    print_r($read_all);  


    $all_data_read = file_get_contents($filename); // anthoter function for read all data 

    echo $all_data_read;

}
?>