<?php

function kadane($A)
{
    $max_so_far = 0;
    $max_ending_here = 0;
    foreach ($A as $value) {
        $max_ending_here = $max_ending_here + $value;
        $max_ending_here = max($max_ending_here, 0);
        $max_so_far = max($max_so_far, $max_ending_here);
    }
    return $max_so_far;
}

function runCircularKadane($A)
{
    if (count($A) == 0) {
        return 0;
    }

    $max = max($A);

    if ($max < 0) {
        return $max;
    }

    $A = array_map(function ($value) {
        return -$value;
    }, $A);

    $neg_max_sum = kadane($A);

    $A = array_map(function ($value) {
        return -$value;
    }, $A);

    return max(kadane($A), array_sum($A) + $neg_max_sum);
}

$A = [2, 1, -5, 4, -3, 1, -3, 4, -1];
echo "The sum of the subarray with the largest sum is " . runCircularKadane($A);

?>
