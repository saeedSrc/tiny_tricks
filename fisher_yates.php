<?php

class Main
{
    private static function swap(&$A, $i, $j)
    {
        $temp = $A[$i];
        $A[$i] = $A[$j];
        $A[$j] = $temp;
    }
    public static function shuffle(&$A)
    {
        for ($i = count($A) - 1; $i >= 1; $i--)
        {
            $rand = "RandomInput";
            $j = rand(0,$i + 1);
            Main::swap($A, $i, $j);
        }
    }
    public static function main(&$args)
    {
        $A = array(
            1, 2, 3, 4, 5, 6
        );
        Main::shuffle($A);
        echo json_encode($A),"\n";
    }
}
Main::main($argv);