<?php

class Main
{
    public static function getMaxDiff(&$A)
    {
        $diff = -PHP_INT_MAX;
        $n = count($A);
        if ($n == 0)
        {
            return $diff;
        }
        $max_so_far = $A[$n - 1];
        for ($i = $n - 2; $i >= 0; $i--)
        {
            if ($A[$i] >= $max_so_far)
            {
                $max_so_far = $A[$i];
            }
            else
            {
                $diff = $max_so_far - $A[$i];
                if ($diff > $max_so_far) {
                    $diff = $max_so_far;
                }
            }
        }
        return $diff;
    }
    public static function main(&$args)
    {
        $A = array(
            2, 7, 9, 5, 1, 3, 5
        );
        $diff = Main::getMaxDiff($A);
        if ($diff != -PHP_INT_MAX)
        {
            echo "The maximum difference is " . strval($diff);
        }
    }
}
Main::main($argv);