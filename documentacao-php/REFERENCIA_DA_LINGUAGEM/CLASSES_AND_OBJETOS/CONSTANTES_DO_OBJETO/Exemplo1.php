<?php 

/**
 * * EXEMPLO #1 DEFININDO E USANDO UMA CONSTANTE
 * 
 *  
*/

class MinhaClasse {
    //constante e uma propriedade que não muda de valor
    //declarando uma constante, a classe vai possui a seguinte constante, por padrão a visibilidade e public
    const constante = 'valor constante';
    //metodo da classe, este metodo pertence a classe
    function mostrarConstante() {
        //imprime a constante como se fosse uma propriedade estatica
        //Propriedades estáticas são acessadas utilizando os :: (Dois pontos dublo): self::$property. somente se for um metodo dentro da classe
        echo self::constante . "\n";
    }
}

//imprime para o usuario a constante, mas acesso a constante e de forma se como ele fosse uma propriedade estatica
echo MinhaClasse::constante . "\n";

$className = "MinhaClasse";

//referenciando a classe por meio da variavel, e por meio disso acessando a constante como se fosse uma propriedade estatica
echo $className::constante; //a partir do PHP 5.3.0

//instancia um novo objeto da classe MinhaClasse
$classe = new MinhaClasse();
//acessando o metodo da classe, por meio da instancia
$classe->mostrarConstante();

//acessando a constante da classe, por meio de uma instancia de objeto, e esse acesso e por meio de forma que se como esivesse acessando uma propriedade estatica.
echo $classe::constante; //a partir do php 5.3.0

?>