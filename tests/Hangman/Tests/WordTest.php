<?php

namespace Hangman\Tests;

//use Hangman\Word;
require(__DIR__.'/../../../src/functions.php');
require_once(__DIR__.'/../../../src/Classtest.php');

use Hangman\Classtest;
use Hangman\Word;
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

    public function testStub(): void
    {
        //#1Create a stub for the SomeClass class.
//        $stub = $this->createStub(Classtest::class);

        //#2 Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder(Classtest::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foop');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertSame('foop', $stub->doSomething());
    }

    public function testReturnArgumentStub(): void
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createStub(Classtest::class);

        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->returnArgument(0));

        // $stub->doSomething('foo') returns 'foo'
        $this->assertSame('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') returns 'bar'
        $this->assertSame('bar', $stub->doSomething('bar'));
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