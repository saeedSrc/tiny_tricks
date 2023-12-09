<?php

function findCombinations($A, $out, $k, $i, $n) {
    // base case: if the combination size is `$k`, print it
    if (count($out) == $k) {
        echo "[" . implode(", ", $out) . "]\n";
        return;
    }

    // start from the previous element in the current combination
    // till the last element
    for ($j = $i; $j < $n; $j++) {
        // add current element `$A[$j]` to the solution and recur with the
        // same index `$j` (as repeated elements are allowed in combinations)
        $out[] = $A[$j];
        findCombinations($A, $out, $k, $j, $n);

        // backtrack: remove the current element from the solution
        array_pop($out);
    }
}

$A = [1, 2, 3];
$k = 2;
$out = [];

findCombinations($A, $out, $k, 0, count($A));

?>
