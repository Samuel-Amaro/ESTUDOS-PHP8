<?php 

/**
 * * EXEMPLO #2 :: de dentro da definição da classe
 * 
 * Três palavras-chave especiais self(este), parent(mãe ou pai) e static(estatico), são utilizadas para acessar propriedades e métodos dentro de uma definição de classe.
*/

//inclui a definição de classe que vamos utilizar
include("Exemplo1.php");

//definição da classe OtherClass que vai ser uma subClasse(ou classe filha), da class MyClass que e uma SuperClasse(ou uma ClasseBase ou classe Pai) em que vai fazer herança, OtherClass Herda tudo de MyClass.
class OtherClass extends MyClass{
    //definindo uma propriedade estatica(pode ser acessada de qualquer lugar)
    public static $my_static = 'variável estática';
    //definindo um metodo estatico da classe(pode ser acessado de qualquer lugar)
    public static function doubleColon() {
        //acessa a propriedade CONSTANTE da classe pai por meio do operador parent(acessa a super classe), e usando o operador de resolução de escopo acessa a propriedade CONSTANTE.
        echo parent::CONST_VALUE . "</br>";
        //acessa a propriedade estatica definida nesta classe(a classe filha). por meio do operador self, que acessa esta classe, ou este objeto, utilizando o operador de resolução de escopo acessa a propriedade estatica
        echo self::$my_static . "</br>";
    }
}

//variavel que obtem referencia ao nome da class
$classname = 'OtherClass';
//Acessa a o metodo estatico por meio do operador de resolução de escopo, utilizando um variavel que obtem o nome da copia da class.
echo $classname::doubleColon(); //A partir do PHP 5.3.0

//utilizando o nome da classe explicitamente
OtherClass::doubleColon();

?>