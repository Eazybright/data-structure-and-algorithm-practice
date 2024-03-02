<?php

function singleNumber($nums) {
    $nums_map = [];

    // search the array
    foreach($nums as $num){
        if(isset($nums_map[$num])){
            $nums_map[$num] += 1; // increment the value of the key
            continue;
        }

        $nums_map[$num] = 1; // create a hashmap
    }


    return array_search(1, $nums_map); // return element that do not have duplicate
}

echo singleNumber([2,2,1]).PHP_EOL; // returns 1
echo singleNumber([3,3]).PHP_EOL; // returns null
echo singleNumber([1,1,1,3,3,1,3,2,4,2]).PHP_EOL; // returns 4
