<?php

function numberOfRotation(Array $arr) {
    $arrayLength = count($arr);
    $low = 0;
    $high = $arrayLength - 1;

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        //  get the previous and next elements in a circular manner
        $next = ($mid + 1) % $arrayLength;
        $prev = ($mid + $arrayLength - 1) % $arrayLength;

        if($arr[$low] <= $arr[$high]){
            return $low;
        }

        if (($arr[$mid] <= $arr[$next]) && ($arr[$mid] > $arr[$prev])) { //Found the element
            return $mid;
        } else if ($arr[$mid] <= $arr[$high]) { //Need to search in the left half of the search space
                $high = $mid - 1;
        } else if($arr[$mid] >= $arr[$low]) { //Need to search in the right half of the search space
            $low = $mid + 1;
        }
    }
    // invalid input
    return -1;
}

$testList = array(8, 9, 10, 2, 5, 6);
$testList2 = array(2, 5, 6, 8, 9, 10);
printf("Array is rotated %d times", numberOfRotation($testList));
echo PHP_EOL;
printf("Array is rotated %d times", numberOfRotation($testList2));