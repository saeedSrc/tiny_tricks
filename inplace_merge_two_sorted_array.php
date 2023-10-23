<?php

class Main
{
    public static function merge(&$X, &$Y)
    {
        $m = count($X);
        $n = count($Y);
        for ($i = 0; $i < $m; $i++)
        {
            if ($X[$i] > $Y[0])
            {
                $temp = $X[$i];
                $X[$i] = $Y[0];
                $Y[0] = $temp;
                $first = $Y[0];
                $k = 0;
                for ($k = 1; $k < $n && $Y[$k] < $first; $k++)
                {
                    $Y[$k - 1] = $Y[$k];
                }
                $Y[$k - 1] = $first;
            }
        }
    }
    public static function main(&$args)
    {
        $X = array(
           16,17,19, 20
        );
        $Y = array(
            2, 4, 23, 26
        );
        Main::merge($X, $Y);
        echo "X: " . json_encode($X),"\n";
        echo "Y: " . json_encode($Y),"\n";
    }
}
Main::main($argv);