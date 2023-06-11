<?php

/**
 * * EXEMPLO #1 Connectando para MySQL
 * 
 * REQUISITO: TER UM SGBD MYSQL INSTALADO E CONFIGURADO, SABENDO O USUAIRO E SENHA
 *  
*/

//estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
//a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

$usuario = "root";
$senha = "[96284269]Ai";
$origemDsn = "mysql:";
$host = "host=localhost"; //pode ser um endereço ip se tiver hospedagem ou dominio
$nomeDataBase = "dbname=testdb;";

//cria uma instancia de PDO para conexão com mySQL
$dbh = new PDO($origemDsn . " "  . $host . $nomeDataBase, $usuario, $senha);                                       

var_dump($dbh); //Object(PDO) sucesso!

?>