<?php

/**
 * * INSTRUÇÕES PREPARADAS AND PROCEDIMENTOS ARMAZENADOS
 * 
 *  Muitos dos bancos de dados mais maduros suportam o conceito de instruções preparadas. O que eles são? Eles podem ser considerados como uma espécie de modelo compilado para o SQL que um aplicativo deseja executar, que pode ser personalizado usando parâmetros variáveis. As declarações preparadas oferecem dois benefícios principais:
 
    - A consulta só precisa ser analisada (ou preparada) uma vez, mas pode ser executada várias vezes com os mesmos parâmetros ou parâmetros diferentes. Quando a consulta for preparada, o banco de dados irá analisar, compilar e otimizar seu plano de execução da consulta. Para consultas complexas, esse processo pode levar tempo suficiente para tornar o aplicativo visivelmente lento se houver necessidade de repetir a mesma consulta muitas vezes com parâmetros diferentes. Ao usar uma instrução preparada, o aplicativo evita repetir o ciclo de análise / compilação / otimização. Isso significa que as instruções preparadas usam menos recursos e, portanto, são executadas com mais rapidez.

    - Os parâmetros para instruções preparadas não precisam ser citados; o driver lida com isso automaticamente. Se um aplicativo usa exclusivamente instruções preparadas, o desenvolvedor pode ter certeza de que nenhuma injeção de SQL ocorrerá (no entanto, se outras partes da consulta estiverem sendo construídas com entrada sem escape, a injeção de SQL ainda é possível).

 * 
 * As instruções preparadas são tão úteis que são o único recurso que o PDO emulará para drivers que não as suportam. Isso garante que um aplicativo será capaz de usar o mesmo paradigma de acesso a dados, independentemente dos recursos do banco de dados.
*/

?>