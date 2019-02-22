<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{


    $valueInArrayA = str_split($a);
    $totalValueOfA = count($valueInArrayA);

    $valueInArrayB = str_split($b);
    $totalValueOfB = count($valueInArrayB);

    if($totalValueOfB !== $totalValueOfA){
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }


    $difference = 0;
    for ($i = 0; $i < $totalValueOfA; $i++) {
        if ($valueInArrayA[$i] === $valueInArrayB[$i]) {
            continue;
        }
        $difference++;

    }
    return $difference;
}
