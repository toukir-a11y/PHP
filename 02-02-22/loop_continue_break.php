<?php
// loop continue & break

for ($i=0; $i<12; $i++){
	echo $i;
	echo "<br>";
	if ($i==7){
		break;
	}
}

echo "<br>";

for( $i =20; $i<50; $i++){
	if ($i%15==0){
		echo $i ;
		echo "<br>";
		break;
	}
}

echo "<br>";	

for ($i= 15; $i<30; $i++){

	if ($i<24) {
		continue;
		}

		echo $i. "<br>" ;
}
	
echo "<br>";

for ($i= 15; $i<30; $i++){

	if ($i%5) {
		continue;
		}

		echo $i ;
}
	




?>