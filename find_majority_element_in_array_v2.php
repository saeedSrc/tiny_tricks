<?php

class Main
{
    public static function findMajorityElement(&$nums)
    {
        $m = -1;
        $i = 0;
        for ($j = 0; $j < count($nums); $j++)
        {
            if ($i == 0)
            {
                $m = $nums[$j];
                $i = 1;
            }
            else if ($m == $nums[$j])
            {
                $i++;
            }
            else
            {
                $i--;
            }
        }
        return $m;
    }
    public static function main(&$args)
    {
        $nums = array(
            1, 3, 2,3, 4, 3, 5 ,3
        );
        echo "The majority element is " . strval(Main::findMajorityElement($nums)),"\n";
    }
}
Main::main($argv);