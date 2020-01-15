<?php
// Arrays
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($carros as $valor){
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade" => 23, "altura"=> 1.75);
$pessoa["cidade"] = "Itabuna";

foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array("cariocas"=> array("Vice de novo"=>" Ratainos", "Campeão como sempre"=>" Mengão", "Choroes"=>" Bostafogo"),
               "paulistas"=> array("Sardinhas", "Bambis", "Cheiroverde"),
               "baianos"=> array("Supergilr", "Derrota", "Itabuna")
              );
echo $times["paulistas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
?>