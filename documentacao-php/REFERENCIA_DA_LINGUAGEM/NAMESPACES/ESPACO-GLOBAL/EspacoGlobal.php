<?php 

/**
 * * ESPAÇO GLOBAL
 * 
 *  Sem qualquer definição de namespace, todas as definições de classe e função são colocadas no espaço global - como era no PHP antes dos namespaces serem suportados. O prefixo de um nome com \ especificará que o nome é exigido do espaço global, mesmo no contexto do namespace.
 * 
 * * EXEMPLO #1 USANFO ESPECIFICAÇÃO DE ESPAÇO GLOBAL
*/

//declara um namespace, um espaço reservado para nomes, declarar funções, classes, constantes com nomes reservados
namespace A\B\C;

/* Esta função é A\B\C\fopen */
function fopen() {
    /* ... */
    //acessa a função fopen, usando o \, especificando que e a função do espaço global, mesmo tendo namespace ou não declarado
    $f = \fopen(); //chama a global fopen
    return $f;
}

?>