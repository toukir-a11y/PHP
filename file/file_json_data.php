<?php
$sinfo = array(

array(
    'fn'=>'toukir',
    'ln'=>'hossain',
    'roll'=>'235524',
    'dept'=>'cmt'
),

array(
    'fn'=>'tasrif',
    'ln'=>'hossain',
    'roll'=>'235524',
    'dept'=>'cmt'
),

array(
    'fn'=>'topu',
    'ln'=>'hossain',
    'roll'=>'235524',
    'dept'=>'cmt'
),

);

$filename = "file\data\json_data.txt";
$encode= json_encode( $sinfo);
file_put_contents($filename,$encode); // data write

$result= file_get_contents($filename);
$decode= json_decode($result, true); // data read 
print_r($decode);
echo $sinfo [0]['fn'];
?>