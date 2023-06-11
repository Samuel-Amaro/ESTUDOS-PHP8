<?php 

/**
 * * OBJETOS E REFERÊNCIAS
 * 
 *  Um dos pontos fortes frequentemente mencionado da POO no PHP 5, é que "objetos são passados por referências por padrão". Isto não é completamente verdade. Esta seção retifica esse pensamento comum usando alguns exemplos.
 * 
 * Uma referência do PHP é um sinônimo, que permite duas variáveis diferentes escreverem para o mesmo valor. A partir do PHP 5, uma variável objeto não contém mais o próprio objeto como valor. Ela contém um identificador do objeto que permite que os acessadores do objeto encontrem o objeto real. Quando um objeto é enviado por argumento, retornado ou atribuído a outra variável, as variáveis diferentes não são sinônimos: elas armazenam uma cópia do identificador, que aponta para o mesmo objeto.
*/

?>