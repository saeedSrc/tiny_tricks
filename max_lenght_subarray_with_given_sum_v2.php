<?php

class Main
{
    public static function putIfAbsent($target,$i, &$arr) {
        if (!array_key_exists($target,$arr)) {
            $arr[$target] = $i;
        }
    }


    public static function findMaxLenSubarray(&$nums, $S)
    {
        $map = array();
        $map[0] = -1;
        $target = 0;
        $len = 0;
        $ending_index = -1;
        for ($i = 0; $i < count($nums); $i++)
        {
            $target += $nums[$i];
            Main::putIfAbsent($target,$i, $map);
            echo "+++";
            print_r($nums);
            if (array_key_exists($target - $S,$map) && $len < $i - $map[$target - $S])
            {
                $len = $i - $map[$target - $S];
                $ending_index = $i;
            }
        }
        echo "[" . strval(($ending_index - $len + 1)) . ", " . strval($ending_index) . "]","\n";
    }
    public static function main(&$args)
    {
        $nums = array(
          2, -1, 2, 3 ,0

        );
        $target = 5;
        Main::findMaxLenSubarray($nums, $target);
    }
}
Main::main($argv);