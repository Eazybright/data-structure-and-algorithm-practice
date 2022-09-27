<?php

function firstAndLastOccurrence(array $arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = $low + ($high - $low) / 2; //Midpoint of the Search Space
        $mid = intval($mid);  //get whole number

        if ($arr[$mid] === $item) { //Found the element
            $first_occurrence = $mid;
            $reversedArr = array_reverse($arr, true);

            $last_occurrence = array_search($arr[$mid], $reversedArr);

            break;
        } else {
            if ($item < $arr[$mid]) { //Need to search in the left half of the search space
                $high = $mid - 1;
            } else { //Need to search in the right half of the search space
                $low = $mid + 1;
            }
        }
    }

    if(isset($first_occurrence) && isset($last_occurrence)){
       return "The first occurrence of element $item is located at index $first_occurrence \n
            The last occurrence of element $item is located at index $last_occurrence";
    }else{
        return "Element not found in the array";
    }
}

$list = [2, 5, 5, 5, 6, 6, 8, 9, 9, 9];
//$list2 =
echo firstAndLastOccurrence($list, 9);
