<?php

class Main
{
    // Find the minimum sum subarray of a given size `k`
    public static function findSubarray($arr, $k)
    {
        // base case
        if (count($arr) == 0 || count($arr) <= $k) {
            return;
        }

        // stores the sum of elements in the current window
        $window_sum = 0;

        // stores the sum of minimum sum subarray found so far
        $min_window = PHP_INT_MAX;

        // stores ending index of the minimum sum subarray found so far
        $last = 0;

        for ($i = 0; $i < count($arr); $i++) {
            // add the current element to the window
            $window_sum += $arr[$i];

            // if the window size is more than equal to `k`
            if ($i + 1 >= $k) {
                // update the minimum sum window
                if ($min_window > $window_sum) {
                    $min_window = $window_sum;
                    $last = $i;
                }

                // remove a leftmost element from the window
                $window_sum -= $arr[$i + 1 - $k];
            }
        }

        printf("The minimum sum subarray is (%d, %d)", $last - $k + 1, $last);
    }

    public static function main()
    {
        $arr = [10, 4, 2, 5, 6, 3, 8, 1];
        $k = 3;

        self::findSubarray($arr, $k);
    }
}

Main::main();

?>
