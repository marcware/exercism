<?php

require "hamming.php";

class HammingComparatorTest extends PHPUnit\Framework\TestCase
{

    /**
     * @group runtest
     */
    public function testNoDifferenceBetweenIdenticalStrands()
    {
        $this->assertEquals(0, distance('A', 'A'));
    }

    /**
     * @group runtest
     */
    public function testCompleteHammingDistanceOfForSingleNucleotideStrand()
    {
        $this->assertEquals(1, distance('A', 'G'));
    }

    /**
     * @group runtest
     */
    public function testCompleteHammingDistanceForSmallStrand()
    {
        $this->assertEquals(2, distance('AG', 'CT'));
    }

    /**
     * @group runtest
     */
    public function testSmallHammingDistance()
    {
        $this->assertEquals(1, distance('AT', 'CT'));
    }

    /**
     * @group runtest
     */
    public function testSmallHammingDistanceInLongerStrand()
    {
        $this->assertEquals(1, distance('GGACG', 'GGTCG'));
    }

    /**
     * @group runtest
     */
    public function testLargeHammingDistance()
    {
        $this->assertEquals(4, distance('GATACA', 'GCATAA'));
    }

    /**
     * @group runtest
     */
    public function testHammingDistanceInVeryLongStrand()
    {
        $this->assertEquals(9, distance('GGACGGATTCTG', 'AGGACGGATTCT'));
    }

    /**
     * @group runtest
     */
    public function testExceptionThrownWhenStrandsAreDifferentLength()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('DNA strands must be of equal length.');
        distance('GGACG', 'AGGACGTGG');
    }
}
