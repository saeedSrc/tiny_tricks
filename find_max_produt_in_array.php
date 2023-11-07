<?php

class Main
{
    public static function findMaximumProduct(&$A)
    {
        $max1 = $A[0];
        $max2 = -PHP_INT_MAX;
        $min1 = $A[0];
        $min2 = PHP_INT_MAX;
        for ($i = 1; $i < count($A); $i++)
        {
            if ($A[$i] > $max1)
            {
                $max2 = $max1;
                $max1 = $A[$i];
            }
            else if ($A[$i] > $max2)
            {
                $max2 = $A[$i];
            }
            if ($A[$i] < $min1)
            {
                $min2 = $min1;
                $min1 = $A[$i];
            }
            else if ($A[$i] < $min2)
            {
                $min2 = $A[$i];
            }
        }
        if ($max1 * $max2 > $min1 * $min2)
        {
            echo "Pair is (" . strval($max1) . ", " . strval($max2) . ")";
        }
        else
        {
            echo "Pair is (" . strval($min1) . ", " . strval($min2) . ")";
        }
    }
    public static function main(&$args)
    {
        $arr = array(
            -10, -3, 5, 6, -2
        );
        Main::findMaximumProduct($arr);
    }
}
Main::main($argv);