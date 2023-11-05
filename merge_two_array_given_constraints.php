<?php

class Main
{
    private static function merge(&$X, &$Y, $m, $n)
    {
        $k = $m + $n + 1;
        while ($m >= 0 && $n >= 0)
        {
            if ($X[$m] > $Y[$n])
            {
                $X[$k--] = $X[$m--];
            }
            else
            {
                $X[$k--] = $Y[$n--];
            }
        }
        while ($n >= 0)
        {
            $X[$k--] = $Y[$n--];
        }

    }
    public static function rearrange(&$X, &$Y)
    {
        if (count($X) == 0)
        {
            return;
        }
        $k = 0;
        foreach ($X as $value)
        {
            if ($value != 0)
            {
                $X[$k++] = $value;
            }
        }
        Main::merge($X, $Y, $k - 1, count($Y) - 1);
    }
    public static function main(&$args)
    {
        $X = array(
            0, 2, 0, 3, 0, 5, 6, 0, 0, 0
        );
        $Y = array(
            1, 8, 9, 10, 15, 43
        );
        Main::rearrange($X, $Y);
        echo json_encode($X),"\n";
    }
}
Main::main($argv);