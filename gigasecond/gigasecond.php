<?php

const GIGA_SECOND = 'PT1000000000S';

function from(DateTime $date)
{
    $dateClone = clone $date;
    return $dateClone->add(new DateInterval(GIGA_SECOND));

}