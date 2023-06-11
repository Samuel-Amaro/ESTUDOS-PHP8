<?php 

/**
 * * LATE STATIC BINDINGS(LIGAÇÕES ESTATICAS ATRASADAS)
 * 
 *  A partir do PHP 5.3.0, o PHP implementa um recurso chamado late static bindings que pode ser usado para referenciar a classe chamada no contexto de herança estática.
 * 
 * Mais precisamente, late static bindings funcionam através do armazenamento do nome da classe na última "chamada não encaminhadas". No caso de chamadas a métodos estáticos, é a classe explicitamente chamada (normalmente o nome a esquerda do operador ::); no caso de chamadas a métodos não estáticos, é o nome da classe do objeto. Uma "chamada encaminhada" é àquela estática, realizada pelos prefixos self::, parent::, static::, ou, se subindo na hierarquia de classes, forward_static_call(). A função get_called_class() pode ser utilizada para recuperar uma string com o nome da classe chamada e static:: introduz seu escopo.
 * 
 * Esse recurso foi chamado de "late static bindings" de uma perspectiva interna em mente. "Late binding" vem do fato que static:: não será resolvido usando a classe onde o método foi definido, mas computada utilizando informações em tempo de execução. É também chamado "static binding" pois pode ser utilizado em (mas não limitado a) chamadas de métodos estáticos.
 * 
*/

?>