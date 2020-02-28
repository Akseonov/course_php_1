<?php

function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mul($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    if ($b === 0) {
        echo 'Вы пытаетесь поделить на 0';
    } else {
        return $a / $b;
    }
}

$a = 1;
$b = 10;

echo add($a,$b) . '<br>';
echo sub($a,$b) . '<br>';
echo mul($a,$b) . '<br>';
echo div($a,$b) . '<br>';