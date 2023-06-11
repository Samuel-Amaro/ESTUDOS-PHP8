<?php 

/**
 * * REGRAS DE ESCOPO PARA IMPORTAÇÃO
 * 
 *  A use palavra-chave deve ser declarada no escopo externo de um arquivo (o escopo global) ou dentro das declarações de namespace. Isso ocorre porque a importação é feita em tempo de compilação e não em tempo de execução, portanto, não pode ter o escopo de bloco. O exemplo a seguir mostrará um uso ilegal da use palavra-chave:
 * 
 * * EXEMPLO #5 Regra de importação ilegal
*/

//declara uma namespace, uma espaço reservado para declarar nomes
namespace Languages;

function toGreenlandic() {
    //maneira errada de fazer a importação de um nome reservado em uma namespace
    use Languages\Danish;

    // ...
}

/**
 * Nota: As regras de importação são baseadas em arquivo, o que significa que os arquivos incluídos NÃO herdarão as regras de importação do arquivo principal. 
*/

?>