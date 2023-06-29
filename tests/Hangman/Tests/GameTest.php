<?php

namespace Hangman\Tests;

use Hangman\Game;
use Hangman\Word;
use PHPUnit\Framework\TestCase;

//class GameTest extends \PHPUnit_Framework_TestCase
final class GameTest extends TestCase
{
    private $game;
    public static $dataGoodLetter = array(
        array('N'),
        array('a'),
    );

    public static $dataBadLetter = array(
        array('x'),
        array('s'),
    );
    
    public static function getDataGoodLetter()
    {
        return self::$dataGoodLetter;
    }

    public static function getDataBadLetter()
    {
        return self::$dataBadLetter;
    }

    public function setUp(): void{
        $this->game = new Game(new Word('Nant'));
    }


    public function testGameHasStart()
    {
        $this->game->tryLetter('N');
        $this->assertFalse($this->game->isWon());
    }

    /**
     * @dataProvider getDataGoodLetter
     */
    public function testIsLetterFound($letter)
    {
        //skip test
        // $this->markTestSkipped('Work in progress...');
        var_dump($letter);
        $this->game->tryLetter($letter);
        $this->assertTrue($this->game->isLetterFound($letter));
    }

    /**
     * @dataProvider getDataBadLetter
     */
    public function testIsLetterNotFound($letter)
    {
        $this->game->tryLetter($letter);
        $this->assertFalse($this->game->isLetterFound($letter));
    }

    public function testGameIsWonAfterAGoogWord()
    {
        $this->game->tryWord('Nant');
        $this->assertTrue($this->game->isWon());
    }

     public function testGetRemainingAttemptsAreEqualsAtStart()
    {
        // echo Game::MAX_ATTEMPTS.'ggg';
        $this->assertEquals(Game::MAX_ATTEMPTS, $this->game->getRemainingAttempts());
    }

    // public function testGetRemainingAttempts()
    // {
    //     $game = new Game(new Word('php'));

    //     $game->tryLetter('h');
    //     $this->assertEquals(Game::MAX_ATTEMPTS, $game->getRemainingAttempts());

    //     $game->tryLetter('o');
    //     $this->assertEquals(Game::MAX_ATTEMPTS - 1, $game->getRemainingAttempts());

    //     $game->tryWord('foo');
    //     $this->assertEquals(0, $game->getRemainingAttempts());
    // }

    // public function testIsWonWithWordTrial()
    // {
    //     $game = new Game(new Word('php'));
    //     $this->assertFalse($game->isWon());

    //     $game->tryWord('php');
    //     $this->assertTrue($game->isWon());
    // }

    // public function testIsWonWithLettersTrial()
    // {
    //     $game = new Game(new Word('php'));
    //     $this->assertFalse($game->isWon());

    //     $game->tryLetter('h');
    //     $this->assertFalse($game->isWon());

    //     $game->tryLetter('p');
    //     $this->assertTrue($game->isWon());
    // }

    // public function testIsHangedWithWordTrial()
    // {
    //     $game = new Game(new Word('php'));
    //     $this->assertFalse($game->isHanged());

    //     $game->tryWord('foo');
    //     $this->assertTrue($game->isHanged());
    // }

    // public function testIsHangedWithLetterTrial()
    // {
    //     $game = new Game(new Word('php'));

    //     $i = $game->getAttempts();
    //     do {
    //         $this->assertFalse($game->isHanged());
    //         $game->tryLetter('a');
    //         $i++;
    //     } while ($i < Game::MAX_ATTEMPTS);

    //     $this->assertTrue($game->isHanged());
    // }

    // public function testTryWord()
    // {
    //     $game = new Game(new Word('php'));
    //     $this->assertInstanceOf('Hangman\\Word', $game->getWord());
    //     $this->assertTrue($game->tryWord('php'));
    //     $this->assertEquals(0, $game->getAttempts());
    // }

    // public function testTryInvalidWord()
    // {
    //     $game = new Game(new Word('php'));
    //     $this->assertFalse($game->tryWord('html'));
    //     $this->assertEquals(Game::MAX_ATTEMPTS, $game->getAttempts());
    // }

    // public function testTryLetter()
    // {
    //     $game = new Game(new Word('php'));

    //     $this->assertFalse($game->tryLetter('3'));
    //     $this->assertEquals(1, $game->getAttempts());

    //     $this->assertFalse($game->tryLetter('e'));
    //     $this->assertEquals(2, $game->getAttempts());

    //     $this->assertTrue($game->tryLetter('p'));
    //     $this->assertEquals(2, $game->getAttempts());

    //     $this->assertFalse($game->tryLetter('p'));
    //     $this->assertEquals(3, $game->getAttempts());
    // }
}