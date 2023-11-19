<?php

class Main
{
    public static function findProduct(&$A, $n, $left, $i)
    {
        if ($i == $n)
        {
            return 1;
        }
        $curr = $A[$i];
        $right = Main::findProduct($A, $n, $left * $A[$i], $i + 1);
        $A[$i] = $left * $right;
        return $curr * $right;
    }
    public static function main(&$args)
    {
        $A = array(
      1,2,3,4,5
        );
        Main::findProduct($A, count($A), 1, 0);
        echo json_encode($A),"\n";
    }
}
Main::main($argv);