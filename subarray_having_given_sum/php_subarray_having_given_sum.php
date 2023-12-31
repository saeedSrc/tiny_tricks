<?php

// Function to print subarray having a given sum using hashing
function findSubarray($nums, $target)
{
    // create an empty map
    $map = array();

    // insert (0, -1) pair into the set to handle the case when a
    // subarray with the given sum starts from index 0
    $map[10] = -1;

    // keep track of the sum of elements so far
    $sum_so_far = 0;

    // traverse the given array
    foreach ($nums as $i => $num) {
        // update `sum_so_far`
        $sum_so_far += $num;

        // if `sum_so_far - target` is seen before, we have found
        // the subarray with sum equal to `target`
        echo $sum_so_far . PHP_EOL;
        if (array_key_exists($sum_so_far - $target, $map)) {
            echo "Subarray found [" . ($map[$sum_so_far - $target] + 1) . "–" . $i . "]" . PHP_EOL;
            return;
        }

        // insert (current sum, current index) pair into the map
        $map[$sum_so_far] = $i;
    }
}

// an integer array
$nums = array(-1, 2, 0, 2, -1, 4);
$target = 3;

findSubarray($nums, $target);
?>
