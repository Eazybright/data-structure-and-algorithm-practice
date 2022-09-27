<?php

function searchElement(array $arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        if ($arr[$mid] === $item) { //Found the element
            return $mid;
        } else {
            if ($item < $arr[$mid]) { //Need to search in the left half of the search space
                $high = $mid - 1;
            } else { //Need to search in the right half of the search space
                $low = $mid + 1;
            }
        }
    }

    return -1;
}

$testList = array(0, 1, 2, 8, 13, 17, 19, 32, 42);
$testList2 = array(8, 9, 10, 2, 5, 6);
$testList3 = array(9, 10, 2, 5, 6, 8);
printf('Element found at index %d', searchElement($testList, 13));
echo PHP_EOL;
printf('Element found at index %d', searchElement($testList2, 10));
echo PHP_EOL;
printf('Element found at index %d', searchElement($testList3, 5));
