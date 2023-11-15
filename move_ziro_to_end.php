<?php

class Main
{
    public static function moveZerosToEnd(&$A)
    {
        $zero_counts = 0;
        for ($i = 0; $i < count($A); $i++)
        {
            if($A[$i] == 0 ) {
                unset($A[$i]);
                $zero_counts++;
            }
        }
        for ($i = 1; $i <= $zero_counts; $i++)
        {
            $A[]=0;
        }

    }
    public static function main(&$args)
    {
        $A = array(
            6, 0, 8, 2, 3, 0, 4, 0, 1
        );
        Main::moveZerosToEnd($A);

        print_r($A);
    }
}
Main::main($argv);
