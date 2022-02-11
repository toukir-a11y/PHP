
<?php



$drinks= array('tea','coffe', 'juice', 'water','milk', 'coke');

$one = array_slice ($drinks, 0,3);
$two = array_slice ($drinks, 3, null , true); //  when fix index outpur correct 

print_r ($one);
print_r ($two);

$newarray=array_merge($one,$two);
print_r($newarray);

$array= $one+$two ; // when u not fix index and using + for merge  output not correct  
print_r ($array);
