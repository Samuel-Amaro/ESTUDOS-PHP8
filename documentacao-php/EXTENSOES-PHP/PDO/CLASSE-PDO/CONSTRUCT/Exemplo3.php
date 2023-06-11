<?php

/**
 * * EXEMPLO #3 CRIE UMA INSTÂNCIA PDO USANDO ALIAS
 * 
 *  O exemplo a seguir assume que php.ini contém a seguinte entrada para permitir uma conexão com um banco de dados MySQL usando apenas o alias mydb:
 * 
 * [PDO] pdo.dsn.mydb="mysql:dbname=testdb;host=localhost"
 *
 * Aliasing: dsn consiste em um nome name que mapeia em php.ini definindo a string DSN. pdo.dsn.name 
*/


/*Conecte-se a um banco de dados ODBC usando um alias
*/

$dsn = 'mydb';
$user = '';
$password = '';

$dbh = new PDO($dsn, $user, $password);

?>