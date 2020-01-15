<?php
// Manipulação de Arquivos
/*
    fopen()
    fclose()
    fwrite()
    !feof()
    fgets()
    filesize()
*/

echo "<h2>Manipulação de Arquivos</h2>";
echo "<br>";

// Declarações de variaveis
$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";
$tamanhoArquivo = filesize($arquivo);

echo "<h3>Inserir conteudo dentro de um arquivo</h3>";
echo "<p>Arquivo aberto, inserido um conteudo e fechado</p>";
$arquivoAberto = fopen($arquivo, 'a'); // Abrir o arquivo
fwrite($arquivoAberto, $conteudo); // Escrever a mensagem no arquivo
fclose($arquivoAberto); // Fechar o arquivo
echo "<hr>";

echo "<h3>Exibir o conteudo do arquivo</h3>";
echo "<p>Exibir quantas linhas tem no arquivo</p>";
$arquivoAberto = fopen($arquivo, 'r'); // Abrir o arquivo

while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
endwhile;

fclose($arquivoAberto); // Fechar o arquivo
