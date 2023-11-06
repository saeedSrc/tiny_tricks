<?php

class Main
{
    public static function findTheBiggestZiroIndex(array $x) {
        $max_count = 0 ;
        $max_index = -1;
        $prev_zero_index = -1;
        $count = 0;

        for($i=0; $i < count($x); $i++) {
           if ($x[$i] == 1 ) {
               $count++;
           } else {
               $count = $i - $prev_zero_index ;
               $prev_zero_index = $i;
           }

           if ($count > $max_count) {
               $max_count = $count;
               $max_index = $prev_zero_index;
           }
       }

       return $max_index;
    }
    public static function main(&$args)
    {
        $X = array(
            0, 0, 1, 0, 1, 1, 1, 0, 1, 1
        );

       $biggest_ziro_index =  Main::findTheBiggestZiroIndex($X);

        echo $biggest_ziro_index;
    }
}
Main::main($argv);