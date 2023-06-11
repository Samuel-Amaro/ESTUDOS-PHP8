<?php

/**
 * *  EXEMPLO #1 Crie uma instância PDO por meio da invocação do driver
*/


/*Conecte-se a um banco de dados PostGreSQL usando a invocação do driver*/

$usuario = "postgres"; //nome de usuario dsn
$senha = "123"; //senha de usuario dsn
$origemDsn = "pgsql: "; //nome do driver PDO
$host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
$nomeDataBase = "dbname= db_dvd_rental;"; //banco de dados
$port = "port=5432;"; //porta em que o usuario esta conectado

//ao instancia um objeto que pdo que ira representar uma conexao com o banco de dados, vamos utilizar especificação de argumento para invocação de driver, o dsn tem que estar completo

$dbh = new PDO($origemDsn . $host . $port . $nomeDataBase, $usuario, $senha);

//verifica se $dbh e uma instancia da class PDO
var_dump($dbh instanceof PDO); //bool true


?>