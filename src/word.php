<?php
namespace Clases;
use constants\constant;

class word
{
  private $words;
  private $keywords;

  public function __construct(string $texto,string $keywords)
  {
    $this->words = $this->clean(explode(" ", $texto));
    $this->keywords = $this->clean(explode(" ", $keywords));
  }

  public function clean (array $words): array
  {
    $result = array_filter(
      array_map("strtolower",
      array_filter(array_map(array('self', "NoChars"), $words)))
    );
    return $result;
  }

  private function NoChars ($word): string
  {
    return str_replace(constant::NOCHARS, '', $word);
  }

  private function beginByVowelFunction (): array
  {  
    $result = new beginByVowel();
    return $result($this->words);
  }

  private function keyWordFunction (): array
  { 
    $result = new keyWord();
    return $result($this->words,$this->keywords);
  }

  private function byVowelTwoCharacterFunction (): array
  {
    $result = new byVowelTwoCharacter();
    return $result($this->words);
  }
    
  public function run(): void
  {
    echo "Palabras Total-> " . count($this->words) . "\n";
       
    echo "Palabras que tienen 2 o mas caracteres-> " . count($this->twoCharacterFunction()) . "\n";
    echo "Palabras inician con vocal-> " . count($this->beginByVowelFunction()) . "\n";
    echo "Palabras Claves-> " . count($this->keyWordFunction()) . "\n";

    echo "Palabras empiezan por vocal y tengan más de 2 caracteres-> " . 
    count($this->byVowelTwoCharacterFunction()) . "\n";
    echo "Palabras Claves inician con vocal-> " . count($this->keyWordByVowelFunction()) . "\n";
    echo "Palabras Claves Inician 2 o más vocales-> " . 
    count($this->keyWordByVowelTwoCharacterFunction()) . "\n";
  }
  
  private function keyWordByVowelFunction (): array
  {
    $result = new keyWordByVowel();
    return $result($this->words, $this->keywords);
  }

  public function keyWordByVowelTwoCharacterFunction (): array
  {
    $result = new keyWordByVowelTwoCharacter();
    return $result($this->words, $this->keywords);
  }
  
  private function twoCharacterFunction (): array
  {
    $result = new twoCharacter();
    return $result($this->words);
  }




}