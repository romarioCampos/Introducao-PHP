<?php

// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 25;
$nome = "Rodrigo";

if(($idade == 25) and ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($idade == 26) && ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($idade == 26) || ($nome == "Carlos")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($idade == 25) xor ($nome == "Carlos")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(!($idade == 25) and !($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
?>