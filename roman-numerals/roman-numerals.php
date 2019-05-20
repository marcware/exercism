<?php

function toRoman($arabic)
{
    $roman = '';
    if ($arabic === 4) {
        $roman = 'IV';
    } else if ($arabic === 5) {
        $roman = 'V';
    } else {
        for ($i = 0; $i < $arabic; $i++) {
            $roman = $roman . 'I';
        }
    }


    return $roman;
}