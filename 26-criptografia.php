<?php
/* ------ base34, Md5 e Sha1 -------
$senha = "123456";
$nova_senha = base64_encode($senha);
echo "base64: ".$nova_senha."<br>";
echo "Sua senha é: ". base64_decode($nova_senha);

echo "<hr>";

echo "Md5: ". md5($senha)."<br>";
echo "Sha1: ". sha1($senha);
*/

$senha = "123456";
$senha_db = '$2y$10$O5YX9ywmErg60UVYX2vd2OmD/ljZsLyPIRbZClIDwospcq5mSKa02';

if(password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;