<?php

/**
 * * PDOStatement::execute
 * 
 * PDOStatement::execute - Executa uma instrução preparada
 * 
 * * DESCRIÇÃO:

  public PDOStatement::execute(?array $params = null): bool

 * 
 * Execute a prepared statement. Se a prepared statement incluiu marcadores de parâmetro:
 
  - PDOStatement::bindParam() e / ou PDOStatement:: bindValue() deve ser chamado para ligar variáveis ​​ou valores(respectivamente) aos marcadores de parâmetro(que pode ser nomeado = :nome ou de posição ?). Variáveis ​​associadas passam seu valor como entrada e recebem o valor de saída, se houver, de seus marcadores de parâmetro associados.

  - Ou uma array de valores de parâmetro somente de entrada deve ser passada.

 * 
 * * PARÂMETROS
 * 
 * params: Uma array de valores com tantos elementos quantos parâmetros vinculados na instrução SQL que está sendo executada. Todos os valores são tratados como PDO::PARAM_STR. Vários valores não podem ser associados a um único parâmetro; por exemplo, não é permitido vincular dois valores a um único parâmetro nomeado em uma cláusula IN (). Vincular mais valores do que o especificado não é possível; se houver mais chaves do params que no SQL especificado em PDO::prepare() , a instrução falhará e um erro será emitido.
 * 
 * * VALOR RETORNADO
 * 
 * Retorna true em caso de sucesso ou false em caso de falha.
*/

?>