<?php
/* This class are provide by kalkicode.com */
class Helper {
    public static function java_lang_math_min($a, $b)
    {
        // Method signature
        // --------------------
        // var : a, type : long
        // var : b, type : long
        // return : long
        // --------------------
        return ($a <= $b) ? $a : $b;
    }

    public static function java_lang_math_max($a, $b)
    {
        // Method signature
        // --------------------
        // var : a, type : long
        // var : b, type : long
        // return : long
        // --------------------
        return ($a >= $b) ? $a : $b;
    }
}

class Main
{

    private static function isConsecutive(&$A, $i, $j, $min, $max)
    {
//        if ($max - $min != $j - $i) {
//            return false;
//        }
//
//        $visited = array_fill(0,$j - $i + 1,false);
//        for ($k = $i; $k <= $j; $k++)
//        {
//            if ($visited[$A[$k] - $min])
//            {
//                return false;
//            }
//            $visited[$A[$k] - $min] = true;
//        }
        $b = array_slice($A, $i, $j+1);
        for ($k = 0; $k < $j -$i +1; $k++) {
            if(!in_array($min + $k, $b))  {
                return false;
            }
        };
        return true;
    }
    public static function findMaxSubarray(&$A)
    {

        $len = 1;
        $start = 0;
        $end = 0;
        for ($i = 0; $i < count($A) - 1; $i++)
        {
            $min_val = $A[$i];
            $max_val = $A[$i];
            for ($j = $i + 1; $j < count($A); $j++)
            {
                $min_val = Helper::java_lang_math_min($min_val,$A[$j]);
                $max_val = Helper::java_lang_math_max($max_val,$A[$j]);
                if (Main::isConsecutive($A, $i, $j, $min_val, $max_val))
                {
                    if ($len < $max_val - $min_val + 1)
                    {
                        $len = $max_val - $min_val + 1;
                        $start = $i;
                        $end = $j;
                    }
                }
            }
        }
        echo "The largest subarray is [" . strval($start) . ", " . strval($end) . "]","\n";
    }
    public static function findLargestConsecutiveSubarray(&$args)
    {
        $A = array(
    8, 10, 1,6, 4, 2,3, 5, 7, 9, 11, 13, 12
        );
        Main::findMaxSubarray($A);
    }
}
Main::findLargestConsecutiveSubarray($argv);