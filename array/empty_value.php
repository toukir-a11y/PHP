<?php

$name='';
if (isset ($name)){
  echo "is set";
}else echo "not set " ;

echo "\n";


if (empty ($name)){
    echo "is empty";
  }else echo "not empty ";

  echo "\n";

  if (isset ($name) && (is_numeric($name) || $name!='')){
      echo "is set";
  } else echo "not set or emtry";



?>