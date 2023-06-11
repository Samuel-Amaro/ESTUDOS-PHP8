<?php 

//INLCUINDO O ARQUIVO ONDE ESTA A DEFINIÇÃO DE CLASSE
include("../CLASS/Exemplo1DefinicaoSimplesDeUmaClasse.php");

/**
 * * EXTENDS
 * 
 *  Uma classe pode herdar constantes, métodos e propriedades de outra classe usando a palavra-chave extends na declaração da classe. Não é possível herdar múltiplas classes; uma classe só pode herdar uma classe base.
 * 
 * Os métodos e propriedades herdados podem ser sobrescritos declarando-os com o mesmo nome definido na classe base. Entretanto, se o método foi definido na classe base como final esse método não poderá ser sobrescrito. É possível acessar os métodos sobrescritos ou propriedades estáticas referenciado-os com parent::.
 * 
 * * EXEMPLO #9 HERANÇA DA CLASSE SIMPLES
 * 
 * 
*/

//criando uma classe Filha(que herda todas propriedades, metodos e definições de uma classe pai ou super classe ou classe Base chamda SimpleClass)
class ExtendClass extends SimpleClass {
    //Redefine o método pai
    //sobrescrevendo o metodo da classe SimpleClass, utiliza a mesma assinatura do metodo
    function displayVar() {
        echo "Classe Herdeira\n";
        parent::displayVar();
    }
}

//cria uma instancia de objeto da classe ExtendClass
$extended = new ExtendClass();
//acessa o metodo sobrescrito
$extended->displayVar();




?>