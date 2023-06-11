<?php 

/**
 * * PROMOÇÃO DE PROPRIEDADES NO CONSTRUTOR
 * 
 *  A partir do PHP 8, parâmetros de construtores podem ser promovidos a uma propriedade do objeto. Isto é bastante comum quando parâmetros do construtor de serem informados em uma propriedade no construtor, sem nenhum processamento. Promoção de construtor fornece uma sintaxe reduzida para esse caso. O exemplo acima pode ser reescrito assim:
 * 
 * * EXEMPLO #3 UTILIZANDO PROMOÇÃO DE PROPRIEDADES NO CONSTRUTOR
 * 
 * 
*/

/*definição de uma classe chamada Point*/
class Point{
    /*definição de um construtor para esta classe, o construtor possui um paramentro obrigatorio, e um paramentro opcional.  os argumentos são propriedades da classe, ou atributos ou campos da classe. os argumentos vão ser como propriedades da classe*/
    public function __construct(protected int $x, protected int $y = 0) {

    }

    public function mostraCampos() {
        //vai acessar as propriedades da classe, definidas como argumento do construtor
        print "$this->x | $this->y </br>";
    }
}  

$teste = new Point(2);
$teste->mostraCampos();

/*
 * Quanto um argumento de construtor incluir um modificador de visibilidade, o PHP interpretará como sendo uma propriedade de objeto e como um argumento do construtor, e assimilará o valor do argumento a uma propriedade de mesmo nome. O corpo do construtor pode estar vazio ou conter outras operações. Quaisquer operações serão executados após os valores dos argumentos serem definidos nas respectivas propriedades.
 * 
 * Nem todos os argumentos são promovidos. É possível misturar os argumentos promovidos e não promovidos em qualquer ordem. Argumentos promovidos não têm impacto no código chamador do construtor.
 * 
 * Nota: Propriedades de objeto não podem ser do tipo callable dado uma ambiguidade que poderia introduzir. Argumentos promovidos, portanto, não podem ser do tipo callable. Quaisquer outra declaração de tipo é permitida.
 * 
 * Nota: Atributos informados em um argumento promovido será replicado tanto na propriedade como no no argumento.
*/
?>