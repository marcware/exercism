<?php

const GIGA_SECOND = 'PT1000000000S';

/**
 * @param DateTime $date
 * @return DateTime
 * @throws Exception
 */
function from(DateTime $date) :DateTime
{
    $dateClone = clone $date;
    return $dateClone->add(new DateInterval(GIGA_SECOND));

}