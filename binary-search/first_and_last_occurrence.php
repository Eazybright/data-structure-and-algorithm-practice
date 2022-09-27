<?php

function findFirstOccurrence(array $arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;
    $first_occurrence = -1; // defaults to invalid input

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        if ($arr[$mid] === $item) { //Found the element
            $first_occurrence = $mid;
            $high = $mid - 1;
        } else {
            if ($item < $arr[$mid]) { //Need to search in the left half of the search space
                $high = $mid - 1;
            } else { //Need to search in the right half of the search space
                $low = $mid + 1;
            }
        }
    }

    if($first_occurrence != -1){
       return "The first occurrence of element $item is located at index $first_occurrence";
    }else{
        return "Element not found in the array";
    }
}

function findLastOccurrence(Array $arr, $item){
    $low = 0;
    $high = count($arr) - 1;
    $last_occurrence = -1; // defaults to invalid input

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        if ($arr[$mid] === $item) { //Found the element
            $last_occurrence = $mid;
            $low = $mid + 1;
        } else {
            if ($item < $arr[$mid]) { //Need to search in the left half of the search space
                $high = $mid - 1;
            } else { //Need to search in the right half of the search space
                $low = $mid + 1;
            }
        }
    }

    if($last_occurrence != -1){
        return "The last occurrence of element $item is located at index $last_occurrence";
    }else{
        return "Element not found in the array";
    }
}

$list = [2, 5, 5, 5, 6, 6, 8, 9, 9, 9];
//$list2 =
echo findFirstOccurrence($list, 5);
echo PHP_EOL;
echo findLastOccurrence($list, 5);
