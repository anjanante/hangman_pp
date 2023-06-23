<?php
/**
 * Created By Storm Nant 2022
 * User: Nantenaina
 * Date: 23/06/2023
 * Time: 16:12
 */

function tryLetter($letter)
{
    $triedLetters = $foundLetters = [];
    $word = 'php';
    $letter = strtolower($letter);
    if (0 === preg_match('/^[a-z]$/', $letter)) {
        throw new \InvalidArgumentException(sprintf('The letter "%s" is not a valid ASCII character matching [a-z].', $letter));
    }

    if (in_array($letter, $triedLetters)) {
        throw new \InvalidArgumentException(sprintf('The letter "%s" has already been tried.', $letter));
    }

    $triedLetters[] = $letter;

    if (false !== strpos($word, $letter)) {
        $foundLetters[] = $letter;
        return true;
    }

    return false;
}