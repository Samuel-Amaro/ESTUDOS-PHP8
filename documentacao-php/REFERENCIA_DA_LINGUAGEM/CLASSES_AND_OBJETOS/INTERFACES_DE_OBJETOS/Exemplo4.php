<?php 

/**
 * * EXEMPLO #4 INTERFACES COM CONSTANTES
 * 
 *  
*/

//declara uma interface chamada a
interface a {
    //define uma constante na interface a
    const b = 'Interface constant';
}

//Imprime: Interface constant
//utilizando o operador de resolução de escopo para acessar um propriedade da interface
echo a::b;

//Isto não funcionará porque não é permitido 
//sobrescrever constantes
//definição da class b, que implementa a interface a
class b implements a {
    //não e possivel sobrescrever constantes de interface, nas classes
    //Obs: nome de interface não precisa do operador $, quando se usa a palavra chave const
    const b = 'Class constant';
}

/**
 * Uma interface, juntamente com a declaração de tipo, fornecem uma boa maneira de garantir que um objeto em particular possua determinados métodos.  
*/

?>