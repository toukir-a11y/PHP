<?php
require_once 'functions.php';

$argument = "wppool";

name('as your wish');



// even 0dd calculation  by funciton 

function evenodd($b){
    if ($b%2==0){
        echo "even ";
    }else echo "odd ";
}
$d= 5;
evenodd ($d);  // when you echo in funtion just call function 

echo "\n";

function even ($n){
    if ($n%2==0){
        return true;
    }  return false;
}

//  factorial function 

function fact (int $n){  // type hinting enable
    for ($i=$n, $f=1; $i>1; $i--){
        $f*=$i;
    } return $f;
  }
  

  function sum (int $a=0, int $b=0, int $c=0):int{
    
    $d= $a+$b+$c;
    return $d;
}

$a=10;
$b=3;
$c=5;

// unlimited argument accept 

function unlimited (int ...$n):int{

    for ($i=0, $r=0; $i<count($n);$i++){
        $r+=$n[$i]; 
    } return $r;
    }



    
    // caluculate factorial 



    function factorial ($n){
        for ($i=$n, $f=1; $i>1; $i--){
            $f*=$i;
        } return $f;
    }
    $n=4;
    echo factorial($n). "\n";
    
    
   // call function in different folder 
    
    $n=4;
    echo fact($n);


    function factorials (int $a){     // type hinting 

        /*
       if (gettype($a)!="integer"){ // type hinting 
            return "invalid";
        }*/
    
    
        for($i=$a, $f=1; $i>1; $i--){
            $f*=$i;
        } return $f;
    }
    
    
    $n= 4;
    echo factorials ($n);
     
    ?>
    