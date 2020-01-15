<?php

// Funções para Strings
/*  strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$nome = "RODRIGO OLIVEIRA";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4);

echo "<hr>";

$objeto = "mouse";
// $novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
// $novoObjeto = str_pad($objeto, 10, "*", STR_PAD_RIGHT);
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso! ", 5);
echo $string;

echo "<hr>";

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "Foda-se as competições entre seleções, meu Ratainos é seleção e não joga nelas.";
$novoTexto = str_replace("Ratainos", "Mengão", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "seleções");

?>