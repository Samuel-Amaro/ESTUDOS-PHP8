<?php

/**
 * * PDOStatement::bindValue() - valor de ligação
 * 
 *  PDOStatement :: bindValue - Vincula um valor a um parâmetro
 * 
 * * DESCRIÇÃO
 
  public PDOStatement::bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR): bool

 * 
 * Vincula um valor a um marcador de posição nomeado(:nomeado) ou de ponto de interrogação(?) correspondente na instrução SQL que foi usada para preparar a instrução.
 * 
 * * PARAMETROS
 * 
 * param: Identificador de parâmetro. Para uma declaração preparada usando marcadores de posição nomeados, este será um nome de parâmetro do formulário :nome . Para uma declaração preparada usando marcadores de posição de ponto de interrogação, esta será a posição indexada 1 do parâmetro.
 * 
 * value: O valor a ser vinculado ao parâmetro.
 * 
 * type: Tipo de dados explícito para o parâmetro usando PDO::PARAM_* constantes.
 * 
 * * VALOR RETORNADO:
 * 
 * Retorna true em caso de sucesso ou false em caso de falha.
 * 
 * 
*/

?>