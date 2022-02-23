<?php

function checkbox($input, $value)
{
    if( isset($_REQUEST[$input]) && is_array($_REQUEST[$input]) && in_array($value, $_REQUEST[$input]) );

    echo "ehecked";
}