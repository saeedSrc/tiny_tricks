<?php

class Main
{
    public static function findEquilibriumIndex(&$A)
    {
        $left = array_fill(0,count($A),0);
        $left[0] = 0;
        for ($i = 1; $i < count($A); $i++)
        {
            $left[$i] = $left[$i - 1] + $A[$i - 1];
        }
        $right = 0;
        $indices = array();
        for ($i = count($A) - 1; $i >= 0; $i--)
        {
            if ($left[$i] == $right)
            {
                array_push($indices,$i);
            }
            $right += $A[$i];
        }
        echo "Equilibrium Index found at " . json_encode($indices),"\n";
    }
    public static function main(&$args)
    {
        $A = array(
            0, -3, 5, -4, -2, 3, 1, 0
        );
        Main::findEquilibriumIndex($A);
    }
}
Main::main($argv);
