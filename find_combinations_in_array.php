<?php

class Main
{
    public static function findCombinations($main_array, $i, $k, &$subarrays, &$out)
    {
        // invalid input
        if (empty($main_array) || $k > count($main_array)) {
            return;
        }

        if ($k == 0) {
            $subarrays[] = $out;
            return;
        }

        for ($j = $i; $j < count($main_array); $j++) {
            $out[] = $main_array[$j];
            self::findCombinations($main_array, $j + 1, $k - 1, $subarrays, $out);
            array_pop($out); // backtrack
        }
    }

    public static function findCombinationsWrapper($main_array, $k)
    {
        $subarrays = [];
        $temp = [];
        self::findCombinations($main_array, 0, $k, $subarrays, $temp);
        return $subarrays;
    }
}

// Example usage
$main_array = [1, 2, 3, 4];
$k = 3;

// process elements from left to right
print_r(Main::findCombinationsWrapper($main_array, $k));
