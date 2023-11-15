<?php

class Main
{public static function swap(&$A, $i, $j)
    {
        $temp = $A[$i];
        $A[$i] = $A[$j];
        $A[$j] = $temp;
    }
    public static function partition(&$A)
    {
        $j = 0;
        for ($i = 0; $i < count($A); $i++)
        {
            if ($A[$i] != 0)
            {
                Main::swap($A, $i, $j);
                $j++;
            }
        }
    }
    public static function main_1(&$args)
    {
        $A = array(
            6, 0, 8, 2, 3, 0, 4, 0, 1
        );
        Main::partition($A);
        echo json_encode($A),"\n";
    }
}
Main::main_1($argv);