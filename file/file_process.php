<?php

$sinfo= array(
array(
    'fn'=>'zahid',
    'ln'=>'hasan',
    'dept'=>'cmt',
    'shift'=>'2nd',
    'roll'=>'235571'
),

array(
    'fn'=>'mehedy',
    'ln'=>'hasan',
    'dept'=>'cmt',
    'shift'=>'2nd',
    'roll'=>'235538'
),


array(
    'fn'=>'mehedy',
    'ln'=>'hasan',
    'dept'=>'cmt',
    'shift'=>'2nd',
    'roll'=>'235538'
)

);

$filename = "file\data\data_read.txt";
$fd= fopen($filename, 'w');
foreach ($sinfo as $sinfo){
    fputcsv($fd, $sinfo);  // write 
}  
$filename = "file\data\data_read.txt";
$fd= fopen ( $filename,'r');
 while($result = fgets($fd)){ // read
     echo $result;
 }
 


?>