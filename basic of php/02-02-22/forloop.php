<?php

// basic for loop syntax


for ($a=0; $a<10; $a++){
	echo $a;
	echo "<br>";
}
  

// 0 to 100 which number divisible by 7  

for ($a=0; $a<20; $a+=7){
	echo $a;
	echo "<br>";
}

// 0 to 100 which number divisiable by 5 and 7

for ($a=0; $a<50	; $a++){
	if ($a%5==0) echo $a."<br>";
	if ($a%7==0) echo $a."<br>";

}





// multiple statement 

for ($a=10; $a>0; $a--){
 echo $a.":".(10-$a);	
echo "<br>";
}

echo "<br>";

for ($a=0,$j=9; $a<10; $a++, $j--){
	echo $a. ":".$j;

	echo "<br>";
}

echo "<br>";

for ($x=10,$y=0; $x>0; $x--,$y++){
	echo $x.":".$y;
	echo "<br>";
}



?>


