<?php

namespace Hangman\Tests;

use Hangman\Word;
require(__DIR__.'/../../../src/functions.php');
use PHPUnit\Framework\TestCase;


final class WordTest extends TestCase
{
//    private $word;
//
//    public function setUp(): void{
//        $this->word = new Word('php', ['p','h'], ['p','h']);
//    }
//
    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);
        tryLetter('5');
    }

//    public function testEquality(): void
//    {
//        $this->assertTrue(tryLetter('p'));
//        $this->assertEquals(
//            [1, 2, 3, 4, 5, 6],
//            [1, 2, 3, 4, 5, 6]
//        );
//    }

    // public function testGetWord()
    // {
    //     $word = new Word('php');
    //     $this->assertEquals(array('p', 'h'), $word->getLetters());
    //     $this->assertEquals('php', (string) $word);
    //     $this->assertEquals('php', $word->getWord());
    // }

    // public function testIsGuessed()
    // {
    //     $word = new Word('php');
    //     $word->tryLetter('h');
    //     $this->assertFalse($word->isGuessed());

    //     $word->tryLetter('p');
    //     $this->assertTrue($word->isGuessed());
    // }

    // public function testTryLetter()
    // {
    //     $word = new Word('gobelins');
    //     $this->assertTrue($word->tryLetter('g'));
    //     $this->assertEquals(array('g'), $word->getFoundLetters());
    // }

    // public function testTryLetterWithNonAsciiLetter()
    // {
    //     $this->setExpectedException('InvalidArgumentException');

    //     $word = new Word('gobelins');
    //     $word->tryLetter('3');
    // }

    // public function testTryLetterWithTriedLetter()
    // {
    //     $word = new Word('gobelins');
    //     $this->assertFalse($word->tryLetter('a'));

    //     $this->setExpectedException('InvalidArgumentException');
    //     $word->tryLetter('a');
    // }
}