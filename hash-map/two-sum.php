<?php

/**
 * Credit: https://www.youtube.com/watch?v=MtL7F3MgL9U
 */
function two_sum($nums, $target) {
    $sets = [];

    for( $i = 0; $i < count($nums); $i++ ) {
        $current_number = $nums[$i];
        $other_number = $target - $current_number; // get the other number that sums up with the current number

        if (isset($sets[$other_number])) {
            return [$i, $sets[$other_number]];
        }

        $sets[$current_number] = $i; // store the curent number and it's indices into the sets array
    }

    return [];
}

print_r(two_sum([2,7,11,15], 9));
print_r(two_sum([3,2,4], 6));
print_r(two_sum([3,2,3], 6));
print_r(two_sum([3,3], 6));