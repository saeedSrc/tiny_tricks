<?php

class Main
{
    public static function threeWayPartition(&$A)
    {
        $start = 0;
        $mid = 0;
        $pivot = 1;
        $end = count($A) - 1;
        while ($mid <= $end)
        {
            if ($A[$mid] < $pivot)
            {
                Main::swap($A, $start, $mid);
                ++$start;
                ++$mid;
            }
            else if ($A[$mid] > $pivot)
            {
                Main::swap($A, $mid, $end);
                --$end;
            }
            else
            {
                ++$mid;
            }
        }
    }
    private static function swap(&$A, $i, $j)
    {
        $temp = $A[$i];
        $A[$i] = $A[$j];
        $A[$j] = $temp;
    }
    public static function main(&$args)
    {
        $A = array(
            0, 1, 2, 2, 1, 0, 0, 2, 0, 1, 1, 0
        );
        Main::threeWayPartition($A);
        echo json_encode($A),"\n";
    }
}
Main::main($argv);