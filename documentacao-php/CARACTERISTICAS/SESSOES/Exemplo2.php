<?php

/**
 * * EXEMPLO #2 DESRESGISTRANDO UMA VARIÁVEL COM $_SESSION
 *  
*/

#  Inicia uma nova sessão ou resume uma sessão existente
# session_start(array $options = []): bool
# session_start() cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via GET ou POST, ou passado via cookie.
# Para utilizar uma sessão com nome, execute session_name() antes de executar session_start().
# Esta função retorna true se uma sessão foi iniciada com sucesso, caso contrário false.
# obtem o resumo da seção atual ja criada
session_start();

//unset — Destrói a variável especificada
//destroi o dado individual do usuario, que esta nessa seção
unset($_SESSION['count']);

?>