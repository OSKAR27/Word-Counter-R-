<?php
namespace Clases;

class beginByVowel extends filter
{
  public function __invoke(array $words)
  {
    return $this->VowelStartWords($words);
  }
 
}