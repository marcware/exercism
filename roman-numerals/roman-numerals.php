<?php

function toRoman($arabic)
{
    $roman = null;

    if ($arabic === 1) {
        $roman = 'I';
    } else if ($arabic === 2) {
        $roman = 'II';
    } else if ($arabic === 3) {
        $roman = 'III';
    }
    return $roman;
}