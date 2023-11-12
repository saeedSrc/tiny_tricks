
<?php

class Main
{
    private static function swap(&$A, $i, $j)
    {
        $temp = $A[$i];
        $A[$i] = $A[$j];
        $A[$j] = $temp;
    }
    public static function rearrangeArray(&$A)
    {
        for ($i = 1; $i < count($A); $i += 2)
        {
            if ($A[$i - 1] > $A[$i])
            {
                Main::swap($A, $i - 1, $i);
            }
            if ($i + 1 < count($A) && $A[$i + 1] > $A[$i])
            {
                Main::swap($A, $i + 1, $i);
            }
        }
    }
    public static function main(&$args)
    {
        $A = array(
            9, 6, 8, 3, 7
        );
        Main::rearrangeArray($A);
        echo json_encode($A),"\n";
    }
}
Main::main($argv);