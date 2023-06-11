<?php 

/**
 * * EXEMPLO #1 CONSTRUTORES EM HERANÇA
 *  
 * Nota: Construtores pais não são chamados implicitamente se a classe filha define um construtor. Para executar o construtor da classe pai, uma chamada a parent::__construct() dentro do construtor da classe filha é necessária. Se a classe filha não definir um construtor, será herdado da classe pai como um método normal (se não foi declarado como privado).
*/

/*definição de uma classe chamada BaseClass(ou Classe Base)*/
class BaseClass {
    //definindo um construtor para esta classe, toda vez que uma instancia dessa classe for criada, esse metodo e chamado automaticamente sozinho, antes de fazer o instanciamento.
    //chamam o método a cada objeto recém criado, sendo apropriado para qualquer inicialização que o objeto necessite antes de ser utilizado.
    function __construct() {
        //uma saida de dados de uma string
        print "No construtor BaseClass </br>";
    }
}

/*definição da classe SubClass(SubClasse), esta classe, vai ser uma subClasse de BaseClass, vai herdar metodos e propriedades de BaseClass, e uma herança*/
class SubClass extends BaseClass{
    //definindo um metodo construtor para a SubClasse
    function __construct() {
        //executa o construtor da classe, pai, chama o construtor da superClasse
        parent::__construct();
        //uma saida de dados de uma string
        print "No construtor SubClass </br>";
    }
}

/*definição de uma classe chamada OtherSubClass(Outra Sub Classe), esta classe vai ser uma subClasse, da SuperClasse Base Class, onde vai poder herdar metodos e propriedades e sobrescrever metodos*/
class OtherSubClass extends BaseClass{
    //Herda o construtor da BaseClass SuperClasse
    //implicitamente vai chamar o construtor de BaseClass, vai herda o construtor.
}

//No BaseClass constructor - construtor de BaseClass sendo executado
//Vai chamar o construtor de BaseClass
//Ao instanciar um objeto da BaseClass class
$obj = new BaseClass();

//No BaseClass construtor - construtor de BaseClass sendo executado
//No SubClass construtor - construtor de SubClass sendo executado
//Vai chamar os dois contrutores, da BaseClass(Super Classe)
//Vai Chamar o construtor de SubClass(Sub Classe)
//Ao instanciar um objeto da SubClass, vai chamar os dois construtores, da classes SubClass, e SuperClasse
$obj = new SubClass();

//No BaseClass construtor - construtor de BaseClass sendo executado
//Ao instanciar um objeto da OtherSubClass, vai chamar o construtor da SuperClasse implicitamente. o contrutor foi definido na SuperClasse BaseClass, mas vai ser chamado, implicitamente por causa da herança
$obj = new OtherSubClass();

?>