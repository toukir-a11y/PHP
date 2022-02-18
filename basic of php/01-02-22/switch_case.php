<?php

$mode = "wppool";


switch($mode)
{
    case 'light':
        echo"light mode";
    break;
    
    case 'dark':
        echo "dark mode";
    break;

    case 'wp dark mode':
    case 'wppool':   
        echo "always dark mode";
    break;
    
    default:
        echo "now default mode";
}

?>