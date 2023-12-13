<?php


class Main {


    public static function getSubarrayHavingGivenSum($array, $k)  {
        $sum = 0;
        $last_seen_index = -1;
         for ($i=0; $i < count($array) -1 ; $i++) {
             $sum+= $array[$i];
             if ($sum > $k) {
                 $last_seen_index++;
                 $sum = $sum - $array[$last_seen_index];
             }

             if ($sum == $k)
                 echo $last_seen_index  +1, " ", $i;
         }
    }

    public static function main($A, $k) {


        Main::getSubarrayHavingGivenSum($A,  $k);
    }

}

$A = [2, 6, 0, 9, 7, 3, 1, 4, 1, 10];
$k = 15;

Main::main($A, $k);