<?php
namespace Clases;

class filter
{
  private function countTwoChars ($word)
  {
    if(strlen($word) > 2) {
      return $word;
    }
  }

  public function Keywords($words, $keywords): array
  {
    return array_intersect($words, $keywords);
  }

  public function VowelStartWords($words): array
  {
    return array_filter(array_map(array('self', "wordBeginVowel"), $words));
  }

  public function MoreThanTwoCharacters($words): array
  {
    return array_filter(array_map(array('self', "countTwoChars"), $words));
  }

  private function wordBeginVowel ($word)
  {
    if(preg_match('/^[eioua]/i', $word)) {
      return $word;
    }
  }

}
