<?php

function power($val, $pow)
{
    if ($pow < 0) {
        return power(1/$val, -$pow);
    }
    if ($pow !== 0) {
        return $val * power($val, $pow - 1);
    }
    return 1;
}

echo power(5, 3);