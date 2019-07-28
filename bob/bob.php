<?php


class Bob
{
    const IF_YOU_ASK_A_QUESTION = 'Sure.';
    const IF_YOU_YELL_AT_HIM = 'Whoa, chill out!';
    const TO_ANYTHING_ELSE = "Whatever.";
    const IF_YOU_YELL_A_QUESTION = "Calm down, I know what I'm doing!";
    const IF_YOU_SAYING_ANYTHING = 'Fine. Be that way!';

    public function respondTo($sentence): string
    {

        $isNumber = $this->isNumber($sentence);
        $isString = $this->isOnlyString($isNumber);
        $isQuestion = $this->isQuestion($sentence);

        switch (true) {
            case ctype_upper($isString) && $isQuestion:
                return self::IF_YOU_YELL_A_QUESTION;
            case ctype_upper(substr($isString, 1)):
                return self::IF_YOU_YELL_AT_HIM;
            case $isQuestion:
                return self::IF_YOU_ASK_A_QUESTION;
            case empty($isNumber):
                return self::IF_YOU_SAYING_ANYTHING;
            default:
                return self::TO_ANYTHING_ELSE;
        }

    }

    /**
     * @param $sentence
     * @return string|string[]|null
     */
    private function isNumber($sentence)
    {
        return preg_replace("/[^a-zA-Z0-9]/", "", $sentence);
    }

    /**
     * @param $isNumber
     * @return string|string[]|null
     */
    private function isOnlyString($isNumber)
    {
        $isString = preg_replace("/[^a-zA-Z]/", "", $isNumber);
        return $isString;
    }

    /**
     * @param $sentence
     * @return bool
     */
    private function isQuestion($sentence): bool
    {
        $isQuestion = substr(trim($sentence), -1) === '?';
        return $isQuestion;
    }
}