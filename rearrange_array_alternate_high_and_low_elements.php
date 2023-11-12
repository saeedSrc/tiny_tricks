<?php

class Main
{
    private static function rearrange(array  &$A)
    {
        asort($A);

        $B = array();

        $k = 0;
        $i=0;
        $j= count($A) -1;

        do {
            $B[$k++] = $A[$i++];
            $B[$k++] = $A[$j--];
        } while  ($i <= $j);

        return $B;


    }
    public static function main(&$args)
    {

        $A = array(
            1, 2, 3, 4, 5, 6, 7
        );
       $B = Main::rearrange($A);
        print_r($B);
    }
}
Main::main($argv);