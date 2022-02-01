<?php

$x=2;
$y=2;

$result=$x<=>$y; //spaceship operator

if ($result==1){
	echo "$x greater than $y";
}
else if ($result==-1){
	echo "$x less than $y ";

}else if ($result==0){
	echo "$x equal $y";
}
