<?php


class Bob
{
    public function respondTo($sentence): string
    {
        if (mb_strstr($sentence,'!')) {
            return 'Whoa, chill out!';
        }
        return "Whatever.";
    }
}