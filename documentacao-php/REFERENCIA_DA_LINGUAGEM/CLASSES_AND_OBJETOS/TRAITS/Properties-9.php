<?php 

/**
 * * PROPERTIES
 * 
 * TRAITS também podem definir propriedades.
 * 
 * * EXEMPLO #12 DEFININDO PROPRIEDADES
 * 
 * 
*/

//declarando um trait chamada PropriedadesTrait
//que podera ser usada em qualquer classe
trait PropriedadesTrait{
    //propriedade(Atributo da trait)
    public $x = 1;    
}

//declarando um class chamada ExemploPropriedades
class ExemploPropriedades{
    //a class ExemploPropriedades usara o trait em sua definição
    use PropriedadesTrait;
}

//criando uma instancia de um objeto da class ExemploPropriedades, como a class não tem um construtor definido não ha necessidade de abrir parentes ao chamar classe
$example = new ExemploPropriedades;
//acessando a propriedade associada a class, mas que foi declarada e implementada pela trait PropriedadesTrait
$example->x;

/**
 * Se um trait define uma propriedade, então uma classe não pode definir uma propriedade com o mesmo nome, a menos que seja compatível (mesma visibilidade e valor inicial), caso contrário, um erro fatal é emitido.
 * 
 * * EXEMPLO #13 RESOLUÇÃO DE CONFLITO
 * 
 * 
*/

//declarando um trait chamada PropriedadesTrait2 que podera ser usada em qualque classe
trait PropriedadesTrait2{
    //propriedades - atributos da trait
    public $mesma = true;
    public $diferente = false;
}

//declarando uma class chamada ExemploPropriedades
class ExemploPropriedades2{
    //a class ExemploPropriedades2 utiliza a trait chamada PropriedadesTrait2, que possui 2 atributos
    use PropriedadesTrait2;
    //atributos(propriedades da class)
    //essa propriedade possui mesma visibilidade e mesmo nome da propriedade, e mesmo valor inical declarados, dentro da trait, isso e permitido pois ambas são iguais
    public $mesma = true;
    //porem essa propriedade possui mesma visibilidade, mesmo nome, mas o valor iniciail esta diferente, isso e gera um erro fatal e conflito de resolução
    public $diferente = true; //error fatal
}

?>