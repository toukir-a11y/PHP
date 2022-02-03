<?php

//ternary operator 


$a =10;
if ($a==10){
	echo "ten";
}else if ($a==8){
	echo "eight";	
}

else echo "don't know this number";

echo "<br>";	

$result=(10==$a)? "ten" :( (8==$a )? "eight": ( "don't know this number"))	;
echo $result;


echo "<br>";

$y=9;
if ($y%2==0){
	echo "even number ";

}else{ echo "odd number";

}

echo "<br>";

$x= $y %2 ==0 ? "even" : "odd";
echo $x;

?>