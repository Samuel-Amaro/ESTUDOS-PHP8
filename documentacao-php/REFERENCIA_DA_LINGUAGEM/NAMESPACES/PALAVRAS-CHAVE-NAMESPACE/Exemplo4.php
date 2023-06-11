<?php 

/**
 * * EXEMPLO #4 o operador de namespace, dentro de um namespace
*/

//declarando um namespace, um espaço reservado de nomes dentro desse script para armazenar nomes reservados de classes, e funções declaradas e constantes
namespace MyProject;

use blah\blah as mine; //consulte "Usando namespaces: Aliasing/Importing

blah\mine(); //chama a função MyProject\blah\mine()

//usando um nome totalmente qualificado para acessar uma função dentro de um espaço de nomes
namespace\blah\mine(); //chama a função MyProjetc\blah\mine()

//usando um espaço de nome não qualificado, caminho relativo
namespace\func(); //chama a função MyProject\func();

namespace\sub\func(); //chama a função MyProject\sub\func()

namespace\cname::method(); //chama um metodo estatico "method" da class MyProject\cname

//instancia um novo objeto usando uma classe que esta definida seu nome reservado dentro de um espaço de nomes

$a = new namespace\sub\cname(); //instanciação do objeto da class MyProject\sub\cname

$b = namespace\CONSTANT; //atribui o valor da constante MyProject \ CONSTANT a $ b
?>