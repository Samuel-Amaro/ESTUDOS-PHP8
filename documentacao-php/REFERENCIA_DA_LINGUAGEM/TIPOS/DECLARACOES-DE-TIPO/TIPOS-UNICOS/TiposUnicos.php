<?php 

/**
 * * TIPOS ÚNICOS
 * 
 TIPO: Nome da classe/interface; 
 DESCRIÇÃO: O valor deve ser uma instanceof determinada classe ou interface.

 TIPO: self(auto);
 DESCRIÇÃO: O valor deve ser instanceof da mesma classe em que a declaração de tipo é usada. Só pode ser usado nas classes.

 TIPO: parent(pai);
 DESCRIÇÃO: O valor deve ser um instanceof pai da classe na qual a declaração de tipo é usada. Só pode ser usado nas aulas.

 TIPO: array;
 DESCRIÇÃO: O valor deve ser uma array.

 TIPO: callable;
 DESCRIÇÃO: O valor deve ser um callable válido . Não pode ser usado como uma declaração de tipo de propriedade de classe.

 TIPO: bool;
 DESCRIÇÃO: o valor deve ser um valor booleano;

 TIPO: float;
 DESCRIÇÃO: o valor deve ser um número de ponto flutuante.

 TIPO: int;
 DESCRIÇÃO: o valor deve ser um número inteiro.

 TIPO: string;
 DESCRIÇÃO: o valor deve ser uma string.

 TIPO: iterable;
 DESCRIÇÃO: O valor deve ser uma array ou um Traversable instanceof

 TIPO: object;
 DESCRIÇÃO: O valor deve ser um objeto .

 TIPO: mixed;
 DESCRIÇÃO: o valor pode ser qualquer valor;

 Aviso: Aliases para os tipos escalares acima não são suportados. Em vez disso, eles são tratados como nomes de classe ou interface. Por exemplo, usar booleancomo uma declaração de tipo exigirá que o valor seja uma instanceof classe ou interface boolean, em vez do tipo bool :
*/

//ao inves de usar o boolean tem que usar o bool, o boolean e uma alias para o tipo escalar bool, mas que não funcionar
//Aviso : "booleano" será interpretado como um nome de classe. Você quis dizer "bool"? Escreva "\ boolean" para suprimir este aviso em C: \ Users \ SAMUE \ SERVIDOR_PHP \ htdocs \ DOCUMENTACAO_PHP \ REFERENCIA_DA_LINGUAGEM \ TIPOS \ DECLARACOES-DE-TIPO \ TiposUnicos.php na linha 45

function test(boolean $param) {

}

test(true);

?>