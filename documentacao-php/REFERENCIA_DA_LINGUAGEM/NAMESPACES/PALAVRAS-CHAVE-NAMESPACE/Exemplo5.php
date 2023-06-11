<?php 

/**
 * * EXEMPLO #5  o operador de namespace, em código global
*/

namespace\func(); //chama a função func()
namespace\sub\func(); //chama a função sub\func();
namespace\cname::method(); //chama o metodo statico "method" da class cname
$a = new namespace\sub\cname(); //instancia um objeto da class sub\cname
$b = namespace\CONSTANT; //atribui o valor da constante para $b
?>