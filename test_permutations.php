<?php
require('permutations.php');

function print_result($result)
{
    foreach($result as $k => $case){
        print($k.' => ');
        foreach($case as $c){
            print($c);
        }
        print("\n");
    }
}

$result = permutations([1,2,3], 2);
print_result($result);
