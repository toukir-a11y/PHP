<!--logical operator 
1. for check equal ==
2. for check not equal !=
3. for check > geterthan 
4. for check < lessthan 
5. for check <= lessthan equal
6. for check => geterthan equal
7. for check && and 
8. for check || or 
9. when use == check value is value are equal but use === check value and type like value are same and data type are same.  -->



   
<?php

// check equal or not equal ! 
$a= 100;
$b =200;

if ($a==$b){
	echo "togerther is same money";
}	
	elseif($a!=$b){
		echo "togerther are not same money <br>";
}	

// check x>y and x<y !

$x=20;
$y=10;

if ($x>$y){
	echo "x greater then y";
}

elseif ($x<$y){
	echo "x less than y";
}

elseif ($x==$y){
	echo "x equal y ";
}

elseif ($x!=$y){
	echo "x and y not equal";
}

echo "<br>";


// check >= and  <=  ! 

if($x >=13  && $x<=19 ){
	echo "this is teenager ";

}
else echo "this is not teenager <br>";


//check ||  or 

$food = "fish";


if ($food=="apple"|| $food =="orange"|| $food=="mango" ){
 echo " this is a fruit ";
}

elseif ($food =="carrot"){
	echo "this is a vagitable";
}

elseif ( $food == "egg" || $food == "fish")
{
    echo "mix fruit";
}

	else {
 	echo" i have no idae about this " ; 
}

?>
