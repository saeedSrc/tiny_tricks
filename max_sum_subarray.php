<?php

class Main
{
    public static function kadane(&$arr)
    {
        $max = max($arr);
        if ($max < 0)
        {
            return $max;
        }
        $maxSoFar = 0;
        $maxEndingHere = 0;
        foreach ($arr as $i)
        {
            $maxEndingHere = $maxEndingHere + $i;
            $maxEndingHere = max($maxEndingHere,0);
            $maxSoFar = max($maxSoFar,$maxEndingHere);

        }
        return $maxSoFar;
    }
    public static function main(&$args)
    {
        $arr = array(
            -2, 1, -3, 4, -1, 2, 1, -5, 4
        );
        echo "The sum of contiguous subarray with the largest sum is " . strval(Main::kadane($arr)),"\n";
    }
}
Main::main($argv);