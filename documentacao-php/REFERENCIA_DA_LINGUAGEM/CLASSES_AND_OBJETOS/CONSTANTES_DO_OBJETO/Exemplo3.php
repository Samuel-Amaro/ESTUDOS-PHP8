<?php 

/**
 * * EXEMPLO #3 EXEMPLO DE EXPRESSÃO CONSTANTE
 *  
*/

//definindo uma constante, que não pode ter seu valor modificado, constante do escopo global do script
const ONE = 1;

//definição de uma classe chamada foo
class foo{
    //A partir do PHP 5.6.0
    //define uma constante chamda TWO, que possui um valor da constante ONE  * 2, essa constante vai ser uma propriedade desta classe, sua visibildiade de publica
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    //self e a referencia a propria classe, e o THEE e a referencia a constante, isso e acessa a constante dentro da propria classe, usando o operador self, mais o operador dois pontos
    const SENTENCE = 'O valor de THREE é ' . self::THREE;
}

/**
 * É possível fornecer uma expressão escalar envolvendo strings e numéricos literais e/ou constantes no contexto de uma constante de classe. 
*/

?>