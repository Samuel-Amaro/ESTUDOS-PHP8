<?php 

/**
 * * __set_state()
 * 
 *  static __set_state(array $properties): object
 * 
 * Esse método estático é chamado em classes exportadas por var_export() desde PHP 5.1.0.
 * 
 * O único parâmetro deste método é um array contendo propriedades exportadas no formato array('property' => value, ...).
 * 
 * Exemplo #5 Usando __set_state()
*/

//definição da classe
class A{
    //propriedade da classe com visibilidade publica
    public $var1;
    public $var2;

    //metodo statico magico associado a classe
    //Esse método estático é chamado em classes exportadas por var_export()
    public static function __set_state($um_array) {
        //cria uma instancia de obj da propria classe
        $obj = new A;
        //setando uma valor na propriedade 1 do objeto
        $obj->var1 = $um_array['var1'];
        //setando uma valor na propriedade 2 do objeto
        $obj->var2 = $um_array['var2'];
        return $obj;
    }
}

# criando uma intancia da classe 
$a = new A;
# setando valores na propriedade do obj
$a->var1 = 5;
$a->var2 = 'foo';
//eval(string); -> Avalie uma string como código PHP
//var_export(); ->  Mostra ou retorna uma representação estruturada de uma variável
// obtém informação estruturada sobre uma dada variável. Ela é similar a var_dump() com uma exceção: a representação retornada é um código PHP válido.
//expression : A variável que você quer exportar.
//return : Se usado e definido para true, var_export(mixed $expression, bool $return = ?): mixed) irá retornar a representação da variável ao invés de exibí-la.
//Retorna a representação da variável quando o parâmetro return é usado e avaliado para true. Caso contrário, esta função retornará null.
//quando var_export e usado o metodo magico do php _set_state e chamado, basenado que a variavel passsada para export tenha o metodo associado, e implementando

eval('$b = ' . var_export($a, true) . ';'); //$b = A::__set_state(array('var1' => 5, 'var2' => 'foo'));

//mostra informações em string sobre a variavel
var_dump($b);

/**
 * Nota: Quando exportando um objeto, var_export() não verifica se __set_state() está implementado na classe do objeto, de forma que re-importar esses objetos falham na ausência de __set_state(). Isto afeta particularmente algumas classes internas. É responsabilidade do programador verificar se todos os objetos podem ser re-importados, ou seja, que todas as classes implementem __set_state(). 
*/

?>