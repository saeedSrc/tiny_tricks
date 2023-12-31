<?php


class main {



    public function findMinArrayLength( array $elements, int $k): int {
    $sum = 0;
    $min_length = 1111111110;
    $sliding_count = 0;
    $left_index = 0;
        foreach ($elements as $element) {
            while ($sum > $k) {
                if ($sliding_count < $min_length) {
                    $min_length = $sliding_count;
                }
                $sum-= $elements[$left_index++];
                $sliding_count--;
            }
            $sum += $element;
            $sliding_count++;
        }

        return  $min_length;

    }


    public function main() {
        $array = [1,2,3,4,5,6,7,8];
        $k=20;
//        $this->findMinArrayLength($array, $k);
        echo "minimom lenght is: " , $this->findMinArrayLength($array, $k);

    }
}

$main = new Main();
$main->main();