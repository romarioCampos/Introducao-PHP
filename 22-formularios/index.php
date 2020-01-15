<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST['enviar-formulario'])):
    // Array de erros
    $erros = array();

    /******* Validações ********** 

    // Validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro";
    endif;

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "E-mail inválido!";
    endif;

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso precisa ser um float!";
    endif;

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "IP inválido!";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida!";
    endif;

    */

    // Sanitize
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro.";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "E-mail inválido!";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida!";
    endif;

    // Exibindo mensagens
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos";
    endif;

endif;
?>
    <!--------- POST ---------
    <form action="dados.php" method="POST">
        Nome: <input type="text" name="nome" /><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
    -->
    <!------------ GET --------------
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome" /><br>
        Email: <input type="email" name="email"><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>
    -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade" /><br>
        Email: <input type="text" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br><br>
    </form>
</body>
</html>