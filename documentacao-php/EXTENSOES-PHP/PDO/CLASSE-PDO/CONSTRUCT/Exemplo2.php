<?php

/**
 * * EXEMPLO #2 Crie uma instância PDO por meio de invocação de URI
 * 
 * O exemplo a seguir assume que o arquivo / usr / local / dbconnect existe com permissões de arquivo que permitem ao PHP ler o arquivo. O arquivo contém o PDO DSN para se conectar a um banco de dados DB2 por meio do driver PDO_ODBC:
 
    odbc:DSN=SAMPLE;UID=john;PWD=mypass

 * 
 * O script PHP pode então criar uma conexão de banco de dados simplesmente passando o uri:parâmetro e apontando para o URI do arquivo:
*/

/*Conecte-se a um banco de dados ODBC usando a chamada de driver
Invocação de URI: dsn consiste em uri seguido por um URI que define a localização de um arquivo que contém a string DSN. O URI pode especificar um arquivo local ou um URL remoto. 
*/

$dsn = 'uri:file:///usr/local/dbconnect';
$user = '';
$password = '';

$dbh = new PDO($dsn, $user, $password);

?>