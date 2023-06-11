<?php

/**
 * * EXEMPLO #3 FECHANDO UMA CONEXÃO 
*/

$usuario = "root"; //usuario do banco de dados
$senha = "[96284269]Ai"; // senha do usuario
$origemDsn = "mysql:"; //origem do banco de dados, especifica qual banco vou usar, porque o PDO e uma generalização
$host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
$nomeDataBase = "dbname= world;"; //database que vou usar
$port = "3306;"; //porta de conexão do usuario

//cria uma instancia de PDO estabelecendo uma conexão, passando os paramentros necessarios para o construtor, para identificar o banco de origem
$dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                    

//use a conexão aqui, testando a conexão fazendo uma consulta
$sth = $dbh->query('SELECT * FROM world.country');

//e agora terminamos; fecha-o
//fechar a conexão tem que atribuit null a todas as referencias ao objeto e varaiveis que são responsaveis por estabelecer a conexão
$sth = null;
$dbh = null;


?>