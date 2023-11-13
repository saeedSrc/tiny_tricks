
<?php

class Main
{
    private static function calc_total_count($inputs)
    {
        $count = 0;
       foreach ($inputs as $input) {
           $count+=$input;
       }
       return $count;
    }

    private static function find_equilibrium_index($inputs, $sum)
    {
       $equilibriumIndexes = [];
        $sum_till_here = 0;
       foreach ($inputs as $key => $val) {
           if($sum - ($sum_till_here + $val)  == $sum_till_here){
               $equilibriumIndexes[]= $key;
           }

           $sum_till_here+= $val;
       }

        return $equilibriumIndexes;
    }


    public static function main(&$args)
    {
        $A = array(
            0, -3, 5, -4, -2, 3, 1, 0
        );
       $sum = Main::calc_total_count($A);
       $indexes = Main::find_equilibrium_index($A, $sum);
       print_r($indexes);
    }
}
Main::main($argv);