<?php

class Main
{
    public static function largestBitonicSubArray(array &$x) {
        $turned = 0;
        $result = array();
        $max_result = array();
        for($i=0; $i < count($x); $i++) {
            if ($i  < count($x)  -1) {
            if ($x[$i+1]  >= $x[$i]) { // increasing
                if($turned == 1) {
                  $turned = 0;
                  if (count($result)  > count($max_result)) {
                      $max_result = $result;
                  }
                  $result = [];
                    $result[] = $x[$i];
                } else {
                    if($i == 0) {
                        $result[]=$x[$i];
                    }
                    $result[]=$x[$i+1];
                }
            } else { // decreasing
                    if (count($result)  > 0) {
                        $turned = 1;
                        $result[]=$x[$i+1];
                    }
            }
            }
       }
        return $max_result;
    }
    public static function main(&$args)
    {
        $X = array(3, 5, 8, 4, 5, 9, 10, 8, 5, 3, 4);

       $result = Main::largestBitonicSubArray($X);

        echo json_encode($result);
    }
}
Main::main($argv);