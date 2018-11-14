<?php
require('permutations.php');

function print_result($result)
{
    foreach($result as $k => $v){
        print($k.' => ' . implode(',', $v) . "\n");
    }
}

$result = permutations([1,2,3], 2);
print_result($result);
