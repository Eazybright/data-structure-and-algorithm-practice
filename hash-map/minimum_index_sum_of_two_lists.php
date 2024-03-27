<?php

function findIntersect($list1, $list2)
{
    $duplicates = array_intersect($list1, $list2); // find common elements in the two arrays
    $hash = [];
    foreach ($duplicates as $value) {
        // find the index of the common elements in their respective array
        $i = array_search($value, $list1); 
        $j = array_search($value, $list2);
        $hash[$value] = $i + $j; // sum the indices
    }

    // get the element with minimum index sum
    return array_keys($hash, min($hash));
}

$list1 = ["Shogun","Tapioca Express","Burger King","KFC"];
$list2 = ["Piatti","The Grill at Torrey Pines","Hungry Hunter Steakhouse","Shogun"];
$list3 = ["happy","sad","good"];
$list4 = ["sad","happy","good"];

print_r(findIntersect($list1, $list2));
print_r(findIntersect($list3, $list4));