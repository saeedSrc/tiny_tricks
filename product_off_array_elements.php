<?php

class Main
{
    public static function findProduct(&$A)
    {
        $n = count($A);
        if ($n == 0)
        {
            return;
        }
        $left = array_fill(0,$n,0);
        $right = array_fill(0,$n,0);
        $left[0] = 1;
        for ($i = 1; $i < $n; $i++)
        {
            $left[$i] = $A[$i - 1] * $left[$i - 1];
        }
        $right[$n - 1] = 1;
        for ($j = $n - 2; $j >= 0; $j--)
        {
            $right[$j] = $A[$j + 1] * $right[$j + 1];
        }
        for ($i = 0; $i < $n; $i++)
        {
            $A[$i] = $left[$i] * $right[$i];
        }
    }
    public static function main(&$args)
    {
        $A = array(
            1,2,3,4,5
        );
        Main::findProduct($A);
        echo json_encode($A),"\n";
    }
}
Main::main($argv);