<?php
   require_once __DIR__ . '/vendor/autoload.php';

    use Clases\word;
   
    $texto = "Esto es un texto molón que sirve como juego de pruebas para la kata de contar palabrejas. No me hagas un diseño de gañán ni de hiper-arquitecto. Que te veo, eh.";
    $keywords = 'palabrejas gañán hiper-arquitecto que eh';
    $print1 = new word($texto,$keywords);     
    $print1->run();
    
?>