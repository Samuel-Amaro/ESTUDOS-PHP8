<?php 

/**
 * * DECLARANDO SUB-NAMESPACES
 * 
 *  Muito parecido com os diretórios e arquivos, os namespaces PHP também contêm a capacidade de especificar uma hierarquia de nomes de namespace. Assim, um nome de namespace pode ser definido com subníveis:
 * 
 * EXEMPLO #1 DECLARANDO UM ÚNICO NAMESPACE COM HIERARQUIA
 * 
*/

//declarando um namespace com hierarquia
namespace MyProject\Sub\Level;

//definição de uma constante
const CONNECT_OK = 1;
//definição de uma classe
class Connection {/*...*/}
//definição de um função
function connect() {/*...*/}

/**
 * O exemplo acima cria constante MyProject\Sub\Level\CONNECT_OK, classe MyProject\Sub\Level\Connection e função MyProject\Sub\Level\connect.
*/

?>