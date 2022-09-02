<?php
/**
 * @return array An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c)
{
    $delta = ($b * $b) - 4 * ($a * $c);
    $x = (- $b - sqrt($delta)) / (2 * $a);
    $y = (- $b + sqrt($delta)) / (2 * $a);
    return [$x, $y];
}

print_r(findRoots(2, 10, 8));