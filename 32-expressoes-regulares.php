<?php
// Expressões regulares
// Define um padrão a ser uasado para procurar ou substituir palavras ou grupos de palavras.
// ^ inicio da expressãp, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres
// {}
// ocorrências - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com│br│com.br)$/
// /^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+.$/

$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

/* Para uma data exemplo: 13/03/2018
"/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/"
*/

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;