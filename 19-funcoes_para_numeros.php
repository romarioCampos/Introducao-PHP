<?php

// Funções para Números
/*
    number_format
    round
    ceil
    floor
    rand
*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.6);

echo "<hr>";

echo ceil(5.10);
echo "<hr>";

echo floor(8.90);
echo "<hr>";

echo rand(1,20);

?>