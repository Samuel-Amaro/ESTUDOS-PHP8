<?php 

/**
 * Nota:  A resolução do nome de classe através de ::class é uma transformação em tempo de compilação. Isso significa que no momento que o texto do nome da classe é criado o autoloading ainda não ocorreu. Como consequẽncia, nomes de classe são expandidos mesmo se a classe não existir. Não é emitido erro nesses casos.
 * 
 * EXEMPLO #15 RESOLUÇÃO DE UM NOME DE CLASSE DE CLASSE AUSENTE
 * 
*/

print Does\Not\Exist::class;

?>