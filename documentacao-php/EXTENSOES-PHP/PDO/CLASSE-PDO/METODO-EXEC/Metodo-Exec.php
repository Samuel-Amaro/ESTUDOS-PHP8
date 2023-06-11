<?php

/**
 * * PDO::exec
 * 
 *  PDO::exec — Executa uma instrução SQL e retornar o número de linhas afetadas
 * 
 * * DESCRIÇÃO
 
    public PDO::exec(string $statement): int

 * 
 * PDO::exec() executa uma instrução SQL em uma única chamada de função, retornando o número de linhas afetadas pela instrução.
 * 
 * PDO::exec() não retorna resultados de uma instrução SELECT. Para uma instrução SELECT que você só precisa emitir uma vez durante seu programa, considere a emissão de PDO::query(). Para uma instrução que você precisa emitir várias vezes, prepare um objeto PDOStatement com PDO::prepare() e emita a instrução com PDOStatement::execute().
 * 
 * * PARÂMETROS
 * 
 * statement: A instrução SQL para preparar e executar.
 * 
 * Os dados dentro da consulta devem ser adequadamente escapados.
 * 
 * * VALOR RETORNADO
 * 
 * PDO::exec() retorna o número de linhas que foram modificadas ou excluídas pela instrução SQL que você emitiu. Se nenhuma linha for afetada, PDO::exec() retorna 0.
 * 
 * AVISO: Aviso Esta função pode retornar o booleano false, mas também pode retornar um valor não-booleano que pode ser avaliado como false, como 0 ou "". Leia a seção em Booleanos para maiores informações. Utilize o operador === para testar o valor retornado por esta função.
 * 
 * O exemplo a seguir depende incorretamente do valor de retorno de PDO::exec(), em que uma instrução que afetou 0 linhas resulta em uma chamada para die():
*/

$db->exec() or die(print_r($db->errorInfo(), true)); //incorreto


?>