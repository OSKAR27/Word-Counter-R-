<?php
namespace Clases;

class keyWordByVowel extends filter
{
    public function __invoke(array $words,array $keywords)
    {
      return $this->Keywords($this->VowelStartWords($words), $keywords);
    }
}