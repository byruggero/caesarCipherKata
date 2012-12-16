<?php

use Cipher\Word;

class WordTest extends \PHPUnit_Framework_TestCase
{
    public function testWordA()
    {
        $this->assertEquals(97, Word::decode("a"));
    }

    public function testWordB()
    {
        $this->assertEquals(98, Word::decode("b"));
    }

    public function testEncode()
    {
        $this->assertEquals("b", Word::encode("a", 1));
    }

    public function testEdgeCases()
    {
        $this->assertEquals("a", Word::encode("z", 1));
    }

    public function testWordNotInDictioanary()
    {
        $this->assertEquals("%", Word::encode("%", 1));
    }
}
 
