<?php
namespace Clases;

class keyWordByVowelTwoCharacter extends filter
{
  public function __invoke(array $words,array $keywords)
  {
    return $this->MoreThanTwoCharacters($this->VowelStartWords($this->Keywords($words, $keywords)));
  }
}