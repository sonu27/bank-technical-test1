<?php

namespace AR;

class Masker
{
    private $maskCharacter;
    private $unmaskedIndexes;
    private $excludedCharacters;

    public function __construct($maskCharacter, array $unmaskedIndexes = [], array $excludedCharacters = [])
    {
        $this->maskCharacter      = $maskCharacter;
        $this->unmaskedIndexes    = $unmaskedIndexes;
        $this->excludedCharacters = $excludedCharacters;
    }

    public function getMaskCharacter()
    {
        return $this->maskCharacter;
    }

    public function setMaskCharacter($maskCharacter)
    {
        $this->maskCharacter = $maskCharacter;
    }

    public function getUnmaskedIndexes()
    {
        return $this->unmaskedIndexes;
    }

    public function setUnmaskedIndexes(array $unmaskedIndexes)
    {
        $this->unmaskedIndexes = $unmaskedIndexes;
    }

    public function getExcludedCharacters()
    {
        return $this->excludedCharacters;
    }

    public function setExcludedCharacters(array $excludedCharacters)
    {
        $this->excludedCharacters = $excludedCharacters;
    }

    public function mask($string)
    {
        $stringArray = str_split($string);
        foreach ($stringArray as $k => $v) {
            if (!in_array($k, $this->unmaskedIndexes) && !in_array($v, $this->excludedCharacters)) {
                $stringArray[$k] = $this->maskCharacter;
            }
        }

        return implode('', $stringArray);
    }

}