<?php

for ($contador=0; $contador <=10; $contador++):
    echo "O contador é $contador <br>";
endfor;

echo "<hr>";

for ($contador =0; $contador <=10; $contador++):
    echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach($cores as $valor):
    echo $valor."<br>";
endforeach;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;
?>