<?php

function toRoman($arabic)
{
    $roman = '';

    for ($i = 0; $i < $arabic; $i++) {
        $roman = $roman . 'I';
    }

    return $roman;
}