<?php

$filename    = "C:\wamp64\www\php\file\value.txt";  //  firt select which file read 


            
$fp = fopen ($filename, 'r');        // file open and  what work u have done?
$result= fgets($fp);                 // fgets function use to read data 
echo $result;  

 echo "</br>";

rewind($fp);                        // The file  show up every time   when you print it
while($result= fgets($fp)) {        //  read all line 
echo $result; 
};
echo "</br>";


fseek($fp, 4);                      // when you fix reopen show data position
while ($data= fgets($fp)){
echo $data ;
}
echo "</br>";

$all= file_get_contents($filename);      // read all data 
echo $all ;
 
echo "</br>";

$n = file ($filename);                   // read all data 
print_r ($n) ;

fclose($fp);                             // file close 

?>


?>