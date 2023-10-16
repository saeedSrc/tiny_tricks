<?php

class Main
{
    public static function findLargestSubarray(&$nums)
    {
        $map = array();
        $map[0] = -1;
        $len = 0;
        $ending_index = -1;
        $sum = 0;
        for ($i = 0; $i < count($nums); $i++)
        {
            $sum += ($nums[$i] == 0) ? -1 : 1;
            if (array_key_exists($sum,$map))
            {
                if ($len < $i - $map[$sum])
                {
                    $len = $i - $map[$sum];
                    $ending_index = $i;
                }
            }
            else
            {
                $map[$sum] = $i;
            }
        }
        if ($ending_index != -1)
        {
            echo "[" . strval(($ending_index - $len + 1)) . ", " . strval($ending_index) . "]","\n";
        }
        else
        {
            echo "No subarray exists","\n";
        }
    }
    public static function main(&$args)
    {
        $nums = array(
           1, 0, 1, 1, 0 , 1, 1, 0, 1, 0
        );
        Main::findLargestSubarray($nums);
    }
}
Main::main($argv);