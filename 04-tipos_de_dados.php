<?php
/******** Escalares **********/
// string
$nome = "Olá mundo";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

// float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
    echo ". É uma flutuante";
else:
    echo "Não é uma flutuante";
endif;
echo "<hr>";

// boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo ". É um booleano";
else:
    echo "Não é uma booleano";
endif;
echo "<hr>";

/******** Compostos **********/

$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if(is_array($carros)):
    echo ". É um vetor";
else:
    echo "Não é uma vetor";
endif;
echo "<hr>";

// object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Romário");
var_dump($cliente);
if(is_object($cliente)):
    echo ". É um objeto";
else:
    echo "Não é uma objeto";
endif;
echo "<hr>";

/******** Especiais **********/

//NULL
$cidade = NULL;
var_dump($cidade);
if(is_null($cidade)):
    echo ". É nullo";
else:
    echo "Não é nullo";
endif;
echo "<hr>";

// Resource
?>