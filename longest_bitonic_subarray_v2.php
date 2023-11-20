<?php

class Main
{
    public static function findBitonicSubarray(&$A)
    {
        if (count($A) == 0)
        {
            return;
        }

        $I = array_fill(0,count($A),0);
        $I[0] = 1;
        for ($i = 1; $i < count($A); $i++)
        {
            $I[$i] = 1;
            if ($A[$i - 1] < $A[$i])
            {
                $I[$i] = $I[$i - 1] + 1;
            }
        }

        $D = array_fill(0,count($A),0);
        $D[count($A) - 1] = 1;
        for ($i = count($A) - 2; $i >= 0; $i--)
        {
            $D[$i] = 1;
            if ($A[$i] > $A[$i + 1])
            {
                $D[$i] = $D[$i + 1] + 1;
            }
        }


        $lbs_len = 1;
        $beg = 0;
        $end = 0;
        for ($i = 0; $i < count($A); $i++)
        {
            $len = $I[$i] + $D[$i] - 1;
            if ($lbs_len < $len)
            {
                $lbs_len = $len;
                $beg = $i - $I[$i] + 1;
                $end = $i + $D[$i] - 1;
            }
        }
        echo "The length of the longest bitonic subarray is " . strval($lbs_len),"\n";
        printf("The longest bitonic subarray indices is [%d, %d]",$beg,$end);
    }
    public static function main(&$args)
    {
        $A = array(
            3, 5, 8, 4, 5, 9, 10, 8, 5, 3, 4
        );
        Main::findBitonicSubarray($A);
    }
}
Main::main($argv);