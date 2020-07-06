<?php
namespace Clases;

class byVowelTwoCharacter extends filter
{
  public function __invoke(array $words)
  {
    return $this->VowelStartWords($this->MoreThanTwoCharacters($words));
  }

}