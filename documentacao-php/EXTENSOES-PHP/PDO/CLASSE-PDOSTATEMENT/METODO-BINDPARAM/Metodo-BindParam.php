<?php

/**
 * * PDOStatement::bindParam - parâmetro de ligação
 * 
 * PDOStatement::bindParam - Vincula um parâmetro ao nome da variável especificada
 * 
 * * DESCRIÇÃO

   public PDOStatement::bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0,mixed $driverOptions = null): bool

 * 
 * Vincula uma variável PHP a um espaço reservado com nome ou ponto de interrogação correspondente na instrução SQL que foi usada para preparar a instrução. Ao contrário de PDOStatement::bindValue(), a variável é vinculada como uma referência e só será avaliada no momento em que PDOStatement::execute() for chamado.
 * 
 * A maioria dos parâmetros são parâmetros de entrada, ou seja, parâmetros que são usados ​​em um modo somente leitura para construir a consulta (mas podem, no entanto, ser convertidos de acordo com type). Alguns drivers suportam a chamada de procedimentos armazenados que retornam dados como parâmetros de saída e alguns também como parâmetros de entrada / saída que enviam dados e são atualizados para recebê-los.
 * 
 * * PARÂMETROS
 * 
 * param: Identificador de parâmetro. Para uma declaração preparada usando marcadores de posição nomeados, este será um nome de parâmetro do formulário :nome. Para uma declaração preparada usando marcadores de posição de ponto de interrogação, esta será a posição indexada 1 do parâmetro.
 * 
 * var: Nome da variável PHP a ser associada ao parâmetro da instrução SQL.
 * 
 * type: Tipo de dados explícito para o parâmetro usando PDO::PARAM_* constantes. Para retornar um parâmetro INOUT de um procedimento armazenado, use o operador OR bit a bit para definir os bits PDO :: PARAM_INPUT_OUTPUT para o type parâmetro.
 * 
 * maxLength: Comprimento do tipo de dados. Para indicar que um parâmetro é um parâmetro OUT de um procedimento armazenado, você deve definir explicitamente o comprimento.
 * 
 * * VALOR RETORNADO:
 * 
 * Retorna true em caso de sucesso ou false em caso de falha.
 *  
*/

?>