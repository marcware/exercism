<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

const FIRST = 0;

function distance($DNAStrandOne, $DNAStrandTwo)
{

    $splitDNAOne = str_split($DNAStrandOne);
    $totalNucleotidesStrandOne = count($splitDNAOne);

    $splitDNATwo = str_split($DNAStrandTwo);
    $totalNucleotidesStandTwo = count($splitDNATwo);

    if($totalNucleotidesStandTwo !== $totalNucleotidesStrandOne){
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $differenceNucleotidesStand = compareStrandOfDNA($totalNucleotidesStrandOne, $splitDNAOne, $splitDNATwo);

    return $differenceNucleotidesStand;
}

/**
 * @param int $totalNucleotidesStrandOne
 * @param array $splitDNAOne
 * @param array $splitDNATwo
 * @return int
 */
function compareStrandOfDNA(int $totalNucleotidesStrandOne, array $splitDNAOne, array $splitDNATwo): int
{
    $differenceNucleotidesStand = 0;

    for ($nucleotide = FIRST; $nucleotide < $totalNucleotidesStrandOne; $nucleotide++) {
        if ($splitDNAOne[$nucleotide] === $splitDNATwo[$nucleotide]) {
            continue;
        }
        $differenceNucleotidesStand++;

    }
    return $differenceNucleotidesStand;
}
