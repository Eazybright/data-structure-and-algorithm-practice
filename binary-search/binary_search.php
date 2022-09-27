<?php

function binarySearch(array $arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;
    $found = false;

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        if ($arr[$mid] === $item) { //Found the element
            $found = true;
            break;
        } else {
            if ($item < $arr[$mid]) { //Need to search in the left half of the search space
                $high = $mid - 1;
            } else { //Need to search in the right half of the search space
                $low = $mid + 1;
            }
        }
    }

    return $found;
}

$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
echo binarySearch($testList, 3) ? 'True' : 'False';
echo PHP_EOL;
echo binarySearch($testList, 13) ? 'True' : 'False';
