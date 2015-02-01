<?php

namespace AR;

interface MaskerInterface
{
    public function __construct($maskCharacter, array $unmaskedIndexes = [], array $excludedCharacters = []);

    public function getMaskCharacter();

    public function setMaskCharacter($maskCharacter);

    public function getUnmaskedIndexes();

    public function setUnmaskedIndexes(array $unmaskedIndexes);

    public function getExcludedCharacters();

    public function setExcludedCharacters(array $excludedCharacters);

    public function mask($string);

}