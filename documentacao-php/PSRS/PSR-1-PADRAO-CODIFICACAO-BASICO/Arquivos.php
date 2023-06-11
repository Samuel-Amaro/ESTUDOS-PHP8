<?php

/**
 * 
 * * ARQUIVOS
 * 
 * * TAGS PHP
 * 
 * O código PHP DEVE usar as <?php ?> tags longas ou short-echo <?= ?>; NÃO DEVE usar as outras variações de tag.
 * 
 * * CODIFICAÇÃO DE CARACTERES
 * 
 * O código PHP DEVE usar apenas UTF-8 sem BOM.
 * 
 * * EFEITOS COLATERAIS
 * 
 * Um arquivo DEVE declarar novos símbolos (classes, funções, constantes, etc.) e não causa outros efeitos colaterais, ou DEVE executar lógica com efeitos colaterais, mas NÃO DEVE fazer os dois.
 * 
 * A frase "efeitos colaterais" significa execução de lógica não diretamente relacionada à declaração de classes, funções, constantes, etc., apenas pela inclusão do arquivo .
 * 
 * "Efeitos colaterais" incluem, mas não estão limitados a: geração de saída, uso explícito de requireou include, conexão com serviços externos, modificação de configurações INI, emissão de erros ou exceções, modificação de variáveis ​​globais ou estáticas, leitura ou gravação de um arquivo e assim por diante .
 * 
 * A seguir está um exemplo de um arquivo com declarações e efeitos colaterais; ou seja, um exemplo do que evitar:
*/