<?php

function combine($n, $k) {
    $result = [];
    backtrack(1, [], $n, $k, $result);
    return $result;
}

function backtrack($start, $path, $n, $k, &$result) {
    // Base case: if the combination has reached the desired length
    if (count($path) == $k) {
        $result[] = $path;
        return;
    }

    // Explore possible combinations
    for ($i = $start; $i <= $n; $i++) {
        $path[] = $i;
        // Recur with the next starting index
        backtrack($i + 1, $path, $n, $k, $result);
        // Backtrack by removing the last element to try other combinations
        array_pop($path);
    }
}

// Example usage:
$n = 4;
$k = 2;
$result = combine($n, $k);

// Print the result
print_r($result);
