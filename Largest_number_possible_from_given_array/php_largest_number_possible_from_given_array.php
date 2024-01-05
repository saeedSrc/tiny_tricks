<?php


class Main {

    public function findLargestNumber(array $k){
        usort($k, function ($a, $b) {

            return strcmp("$b$a", "$a$b");
        });

//        print_r($k);
        return implode('', $k);
    }

    public function main() {
        $a= [10, 68, 75, 7, 21, 12];
        $largestNumber  = $this->findLargestNumber($a);
        echo $largestNumber;
    }
}

$main = new Main();
$main->main();
