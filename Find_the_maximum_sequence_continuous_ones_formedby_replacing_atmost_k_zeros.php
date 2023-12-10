<?php

class Main
{
    // Function to find the maximum sequence of continuous 1's by replacing
    // at most `k` zeros by 1 using sliding window technique
    public static function findLongestSequence($A, $k)
    {
        $left = 0;   // represents the current window's starting index
        $count = 0;  // stores the total number of zeros in the current window
        $window = 0; // stores the maximum number of continuous 1's found
        // so far (including `k` zeros)

        // store left index of max window found so far
        $leftIndex = 0;

        // maintain a window `[left…right]` containing at most `k` zeros
        for ($right = 0; $right < count($A); $right++) {
            // if the current element is 0, increase the count of zeros in the
            // current window by 1
            if ($A[$right] == 0) {
                $count++;
            }

            // the window becomes unstable if the total number of zeros in it becomes
            // more than `k`
            while ($count > $k) {
                // if we have found zero, decrement the number of zeros in the
                // current window by 1
                if ($A[$left] == 0) {
                    $count--;
                }

                // remove elements from the window's left side till the window
                // becomes stable again
                $left++;
            }

            // when we reach here, window `[left…right]` contains at most
            // `k` zeros, and we update max window size and leftmost index
            // of the window
            if ($right - $left + 1 > $window) {
                $window = $right - $left + 1;
                $leftIndex = $left;
            }
        }

        // no sequence found
        if ($window == 0) {
            return;
        }

        // print the maximum sequence of continuous 1's
        echo "The longest sequence has length $window from index $leftIndex to " . ($leftIndex + $window - 1) . "\n";
    }
}

// Test the function
$A = [1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0];
$k = 3;

Main::findLongestSequence($A, $k);
