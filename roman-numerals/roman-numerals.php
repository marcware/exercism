<?php

function toRoman($arabic)
{
    $roman = null;

    if ($arabic === 1) {
        $roman = 'I';
    } else if ($arabic === 2) {
        $roman = 'II';
    }
    return $roman;
}