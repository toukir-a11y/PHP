<?php

function select($value)
{
    foreach($value as $values)
    {
        printf("<option value ='%s'>%s</option>", $values, $values);
    }
}