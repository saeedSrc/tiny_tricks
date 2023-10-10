<?php

class Main
{
    function __construct(){
    }
    public static function findDuplicate(&$nums)
    {
        $duplicate = -1;
        foreach ($nums as $i)
        {

            $val = ($i < 0) ? -$i : $i;
            if ($nums[$val] >= 0)
            {
                $nums[$val] = -$nums[$val];
            }
            else
            {
                $duplicate = $val;
                break;
            }
        }
        for ($i = 0; $i < count($nums); $i++)
        {
            if ($nums[$i] < 0)
            {
                $nums[$i] = -$nums[$i];
            }
        }
        return $duplicate;
    }
    public static function themain(&$args)
    {
        $nums = array(
            1, 2, 3, 4, 3, 5, 6, 7
        );
        echo "The duplicate element is " . strval(Main::findDuplicate($nums)),"\n";
    }
}
Main::themain($argv);