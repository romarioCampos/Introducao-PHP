<?php

/****** is_array($array) = verificar se uma determinada variável é uma array ****** 

$nomes = array("Rodrigo", "Felipe", "Maria", "José");

var_dump(is_array($nomes));

if(is_array($nomes)):
    echo "é uma array";
else:
    echo "não é uma array";
endif;
*/

/******* in_arra($valor, $array) = verifica se um determinado valor existe em alguma posição da array ******** 

$nomes = array("Rodrigo", "Felipe", "Maria", "José");

if(in_array("Carlos", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe na array";
endif;
*/

/******  ******* 
$nomes = array("Primo"=>"Rodrigo", "Vizinho"=>"Felipe", "Mãe"=>"Maria", "Pai"=>"José");

$keys = array_keys($nomes);
print_r($keys);
*/

/***** array_merge ***** 
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
*/

/***** array_pop ***** 

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_pop($carros);
echo "<br>";
print_r($carros);
*/

/******* array_shift ******** 

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_shift($carros);
echo "<br>";
print_r($carros);
*/

/******* array_unshift ******** 

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
*/

/****** array_push ******** 

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
*/

/******* array_combine ******** 

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Mengão", "Ratainos", "Cachorrada");

$times = array_combine($keys, $values);
print_r($times);
*/

/******** array_sum ******** 

$soma = array(7.8,5.5,10,7.2);
$total = array_sum($soma);
echo $total;
*/

/********* explode ********** 

$data = "30/02/2018";

$novaData = explode('/', $data);
print_r($novaData);


$frase = "meu nome não é Johnny";

$array = explode(" ", $frase);

print_r($array);
*/

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");

$string = implode(", ", $nomes);

echo $string;

?>