<?php 

//isso é necessário para que a desserialização funcione corretamente.
include("Classe.php");

//file_get_contents — Lê todo o conteúdo de um arquivo para uma string
//file_get_contents(string $filename, int $flags = ?, resource $context = ?, int $offset = ?, int $maxlen = ?): string
//filename : Nome do arquivo para ler.
//offset : O ponto onde a leitura deve começar.
//maxlen : Comprimento máximo dos dados lidos.
//A função retorna os dados lidos ou false em caso de falha.
$s = file_get_contents('store');

//unserialize - Cria um valor PHP a partir de uma representação armazenada
//unserialize(string $data, array $options = []): mixed
//data : A string serializada. Se a variável que está sendo desserializada for um objeto, após reconstruir com sucesso o objeto, o PHP tentará automaticamente chamar os métodos __unserialize () ou __wakeup () (se houver).
//options : Quaisquer opções a serem fornecidas para desserializar () , como uma matriz associativa.
//Valor Retornado: O valor convertido é retornado e pode ser bool , int , float , string , array ou objeto . Caso a string passada não seja serializável, ela falseé retornada e E_NOTICEemitida.
$a = unserialize($s);

//agora use a função show_one () do objeto $ a.
$a->show_one();

?>