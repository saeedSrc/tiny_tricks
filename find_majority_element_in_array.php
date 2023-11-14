<?php

class Main
{
    public static function findMajorityElements(array $x) {

         $limit = count($x)/2;
         var_dump($limit);
         $foundedElementsCount = [];
         $majorityElements = [];
        for($i=0; $i < count($x); $i++) {
           if (!isset($foundedElementsCount[$x[$i]])) {
               $foundedElementsCount[$x[$i]] = 1;
           } else {
               $foundedElementsCount[$x[$i]]++;
           }

           if ($foundedElementsCount[$x[$i]] > $limit) {
               $majorityElements[]= $x[$i];
               }
        }

        return $majorityElements;
    }
    public static function main(&$args)
    {
        $X = array(
            1, 8, 3, 4, 3, 3, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3
        );

        $majorityElements =  Main::findMajorityElements($X);

        print_r($majorityElements);
    }
}
Main::main($argv);