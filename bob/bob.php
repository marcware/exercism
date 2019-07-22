<?php


class Bob
{
    public function respondTo($sentence): string
    {


        if (mb_strstr($sentence, '?')) {
            return 'Sure.';
        }

        if (mb_strstr($sentence, '!')) {
            return 'Whoa, chill out!';
        }

        if (ctype_upper($sentence)) {
            return 'Whoa, chill out!';
        }

        if (mb_strtoupper($sentence, 'utf-8') === $sentence) {
            return 'Whoa, chill out!';
        }
        return "Whatever.";
    }
}