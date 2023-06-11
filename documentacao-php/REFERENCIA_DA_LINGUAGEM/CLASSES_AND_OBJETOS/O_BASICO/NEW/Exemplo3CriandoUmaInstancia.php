<?php 

//INLCUINDO O ARQUIVO ONDE ESTA A DEFINIÇÃO DE CLASSE
include("../CLASS/Exemplo1DefinicaoSimplesDeUmaClasse.php");

/**
 * * EXEMPLO #3 CRIANDO UMA INSTÂNCIA
 * 
 *  
*/

//cria uma instancia da class SimpleClass()
$instance = new SimpleClass();

//Também pode ser feito com uma variável
$className = 'SimpleClass';
$instance = new $className(); //new SimpleClass()

/**
 * No contexto da classe, é possível criar um novo objeto com new self e new parent.
 * 
 *  Ao atribuir uma instância de uma classe já criada, a uma variável nova, a variável nova irá acessar a mesma instância do objeto que foi atribuído. Este comportamento se mantém ao se passar instâncias a uma função. Uma cópia de um objeto criado pode ser feita clonando o mesmo.
*/
?>