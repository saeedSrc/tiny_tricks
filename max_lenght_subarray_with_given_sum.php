<?php

class Main
{
    public static function findMaxLenSubarray(&$nums, $S)
    {
        $len = 0;
        $ending_index = -1;
        for ($i = 0; $i < count($nums); $i++)
        {
            $target = 0;
            for ($j = $i; $j < count($nums); $j++)
            {
                $target += $nums[$j];
                if ($target == $S)
                {
                    if ($len < $j - $i + 1)
                    {
                        $len = $j - $i + 1;
                        $ending_index = $j;
                    }
                }
            }
        }
        echo "[" . strval(($ending_index - $len + 1)) . ", " . strval($ending_index) . "]","\n";
    }
    public static function main(&$args)
    {
        $nums = array(
            5, 1, 8, 2, -3, 1, 1, 3, 4, 1
        );
        $target = 6;
        Main::findMaxLenSubarray($nums, $target);
    }
}
Main::main($argv);