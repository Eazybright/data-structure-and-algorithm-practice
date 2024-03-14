<?php

function isHappy($number)
{    
    $sets = [];

    while (true) {
        $sum = 0;
         while ($number) {
            echo "before value of $number".PHP_EOL;
            $modulo = intval($number) % 10;
            $sum += ($modulo * $modulo);
            $number /= 10;
            echo "after value of $number".PHP_EOL;
        }

        $number = $sum;
        if (isset($sets[$sum])) {
            break;
        } else {
            $sets[$sum] = true;
        }
    }
    return $number == 1;
}

print_r(isHappy(4));