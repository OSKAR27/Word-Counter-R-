<?php
namespace Clases;

class twoCharacter extends filter
{
    public function __invoke(array $words)
    {
      return $this->MoreThanTwoCharacters($words);
    }
}