<?php

/**
 * * PDO::PREPARE - PDO::PREPARAR
 * 
 * PDO::prepare - Prepara uma instrução(SQL) para execução e retorna um objeto de instrução(SQL)
 * 
 * * DESCRIÇÃO
    
    public PDO::prepare(string $query, array $options = []): PDOStatement|false

 * 
 * Prepara uma instrução SQL a ser executada pelo  PDOStatement::execute() metodo. O modelo de instrução pode conter zero ou mais marcadores de parâmetro com nome (:nome) ou ponto de interrogação (?) Para os quais os valores reais serão substituídos quando a instrução for executada. Os marcadores de parâmetro com nome e ponto de interrogação não podem ser usados ​​no mesmo modelo de instrução; apenas um ou outro estilo de parâmetro. Use esses parâmetros para vincular qualquer entrada do usuário, não inclua a entrada do usuário diretamente na consulta.
 * 
 * Você deve incluir um marcador de parâmetro exclusivo para cada valor que deseja passar para a instrução ao chamar  PDOStatement::execute().  Você não pode usar um marcador de parâmetro nomeado com o mesmo nome mais de uma vez em uma instrução preparada, a menos que o modo de emulação esteja ativado.
 * 
 * NOTA: Os marcadores de parâmetro podem representar apenas um literal de dados completo. Nem a parte literal, nem a palavra-chave, nem o identificador, nem qualquer parte arbitrária da consulta pode ser vinculada por meio de parâmetros. Por exemplo, você não pode vincular vários valores a um único parâmetro na cláusula IN () de uma instrução SQL.
 * 
 * Chamar PDO::prepare() e PDOStatement::execute() para instruções que serão emitidas várias vezes com diferentes valores de parâmetro otimiza o desempenho de seu aplicativo, permitindo que o driver negocie o cache do cliente e / ou servidor do plano de consulta e Meta informação. Além disso, chamar PDO::prepare () e PDOStatement::execute() ajuda a prevenir ataques de injeção de SQL, eliminando a necessidade de citar manualmente e escapar dos parâmetros.
 * 
 * O PDO emulará instruções preparadas/parâmetros associados para drivers que não os suportam nativamente, e também pode reescrever marcadores de parâmetros de estilo de ponto de interrogação ou nomeados para algo mais apropriado, se o driver suportar um estilo, mas não o outro.
 * 
 * NOTA: O analisador usado para instruções preparadas emuladas e para reescrever parâmetros de estilo com nome ou ponto de interrogação suporta os escapes de barra invertida não padrão para aspas simples e duplas. Isso significa que as cotações de encerramento imediatamente precedidas por uma barra invertida não são reconhecidas como tal, o que pode resultar na detecção incorreta de parâmetros, fazendo com que a instrução preparada falhe ao ser executada. Uma solução alternativa é não usar preparações emuladas para tais consultas SQL e evitar a reescrita de parâmetros usando um estilo de parâmetro que seja nativamente suportado pelo driver. 
 * 
 * * PARÂMETROS
 * 
 * query(consulta): Deve ser um modelo de instrução SQL válido para o servidor de banco de dados de destino.
 * 
 * options(opções): Esta array contém um ou mais pares chave => valor para definir valores de atributo para o objeto PDOStatement que este método retorna. Você normalmente usaria isso para definir o PDO::ATTR_CURSOR valor PDO::CURSOR_SCROLL para solicitar um cursor rolável. Alguns drivers têm opções específicas do driver que podem ser definidas no momento da preparação.
 * 
 * * VALOR RETORNADO:
 * 
 * Se o servidor de banco de dados preparar a instrução com sucesso, PDO::prepare() retornará um objeto PDOStatement . Se o servidor de banco de dados não puder preparar a instrução com êxito, PDO::prepare() retorna false ou emite PDOException (dependendo do tratamento de erros ).
 * 
 * Nota: As instruções preparadas emuladas não se comunicam com o servidor de banco de dados, portanto PDO::prepare() não verifica a instrução.
 * 
*/


?>