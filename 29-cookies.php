<?php
// COOKIE
setcookie('user', 'Rodrigo Oliveira', time()+3600);
setcookie('email', 'rodrigosantosweb@gmail.com', time()+3600);
/* Para remover o Cookie usamos o sinal de negativo ' - '
setcookie('email', 'rodrigosantosweb@gmail.com', time()-3600);
*/
setcookie('ultimapesquisa', 'tenis adidas', time()+3600);

echo $_COOKIE['ultimapesquisa'];