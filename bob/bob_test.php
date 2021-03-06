<?php
require_once "bob.php";

class BobTest extends PHPUnit\Framework\TestCase
{

    /**
     * @var \Bob
     */
    private $bob;

    public function setUp(): void
    {
        $this->bob = new Bob;
    }

    /** @group runtestbob */
    public function testStatingSomething()
    {
        $this->assertEquals(
            "Whatever.",
            $this->bob->respondTo("Tom-ay-to, tom-aaaah-to.")
        );
    }

    /** @group runtestbob */
    public function testShouting()
    {
        $this->assertEquals(
            "Whoa, chill out!",
            $this->bob->respondTo("WATCH OUT!")
        );
    }

    /** @group runtestbob */
    public function testShoutingGibberish()
    {
        $this->assertEquals(
            "Whoa, chill out!",
            $this->bob->respondTo("FCECDFCAAB")
        );
    }

    /** @group runtestbob */
    public function testAskingAQuestion()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo("Does this cryogenic chamber make me look fat?"));
    }

    /** @group runtestbob */
    public function testAskingANumericQuestion()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo("You are, what, like 15?"));
    }

    /** @group runtestbob */
    public function testAskingGibberish()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo("fffbbcbeab?"));
    }

    /** @group runtestbob */
    public function testTalkingForcefully()
    {
        $this->assertEquals("Whatever.", $this->bob->respondTo("Let's go make out behind the gym!"));
    }

    /** @group runtestbob */
    public function testUsingAcronymsInRegularSpeech()
    {
        $this->assertEquals(
            "Whatever.",
            $this->bob->respondTo("It's OK if you don't want to go to the DMV.")
        );
    }

    /** @group runtestbob */
    public function testForcefulQuestion()
    {
        $this->assertEquals(
            "Calm down, I know what I'm doing!",
            $this->bob->respondTo("WHAT THE HELL WERE YOU THINKING?")
        );
    }

    /** @group runtestbob */
    public function testShoutingNumbers()
    {
        $this->assertEquals(
            "Whoa, chill out!",
            $this->bob->respondTo("1, 2, 3 GO!")
        );
    }

    /**
     * @group runtestbob
     */
    public function testOnlyNumbers()
    {
        $this->assertEquals(
            "Whatever.",
            $this->bob->respondTo("1, 2, 3")
        );
    }

    /** @group runtestbob */
    public function testQuestionWithOnlyNumbers()
    {
        $this->assertEquals(
            "Sure.",
            $this->bob->respondTo("4?")
        );
    }

    /** @group runtestbob */
    public function testShoutingWithSpecialCharacters()
    {
        $this->assertEquals(
            "Whoa, chill out!",
            $this->bob->respondTo("ZOMG THE %^*@#$(*^ ZOMBIES ARE COMING!!11!!1!")
        );
    }

    /** @group runtestbob */
    public function testShoutingWithNoExclamationMark()
    {
        $this->assertEquals(
            "Whoa, chill out!",
            $this->bob->respondTo("I HATE YOU")
        );
    }

    /**
     * @group runtestbob
     */
    public function testStatementContainingQuestionMark()
    {
        $this->assertEquals(
            "Whatever.",
            $this->bob->respondTo("Ending with ? means a question.")
        );
    }

    /**
     * @group runtestbob
     */
    public function testNonLettersWithQuestion()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo(":) ?"));
    }

    /**
     * @group runtestbob
     */
    public function testPrattlingOn()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo("Wait! Hang on. Are you going to be OK?"));
    }

    /**
     * @group runtestbob
     */
    public function testSilence()
    {
        $this->assertEquals("Fine. Be that way!", $this->bob->respondTo(""));
    }

    /**
     * @group runtestbob
     */
    public function testProlongedSilence()
    {
        $this->assertEquals("Fine. Be that way!", $this->bob->respondTo("         "));
    }

    /**
     * @group runtestbob
     */
    public function testAlternateSilence()
    {
        $this->assertEquals("Fine. Be that way!", $this->bob->respondTo("\t\t\t\t\t\t\t\t\t\t"));
    }

    /**
     * @group runtestbob
     */
    public function testMultipleLineQuestion()
    {
        $this->assertEquals("Whatever.", $this->bob->respondTo("\nDoes this cryogenic chamber make me look fat?\nno"));
    }

    /**
     * @group runtestbob
     */
    public function testStartingWithWhitespace()
    {
        $this->assertEquals("Whatever.", $this->bob->respondTo("        hmmmmmmm..."));
    }

    /**
     * @group runtestbob
     */
    public function testEndingWithWhitespace()
    {
        $this->assertEquals("Sure.", $this->bob->respondTo("Okay if like my  spacebar  quite a bit?   "));
    }


    /**
     * @group runtestbob
     */
    public function testNonQuestionEndingWithWhitespace()
    {
        $this->assertEquals("Whatever.", $this->bob->respondTo("This is a statement ending with whitespace      "));
    }

    /**
     * @group runtestbob
     */
    public function testOtherWhitespace()
    {
        $this->assertEquals("Fine. Be that way!", $this->bob->respondTo("\n\r \t\u{000b}\u{00a0}\u{2002}"));
    }

    /**
     * @group runtestbob
     */
    public function testShoutingWithUmlauts()
    {
        $this->assertEquals("Whoa, chill out!", $this->bob->respondTo("ÜMLÄÜTS!"));
    }


    public function testCalmlySpeakingWithUmlauts()
    {
        $this->assertEquals(
            "Whatever.",
            $this->bob->respondTo("ÜMLäÜTS!")
        );
    }
}
