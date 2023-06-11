<?php

/**
 * * EXEMPLO #4 CONEXÕES PERSISTENTES
 * 
 *  Muitos aplicativos da web se beneficiarão ao fazer conexões persistentes com servidores de banco de dados. As conexões persistentes não são fechadas no final do script, mas são armazenadas em cache e reutilizadas quando outro script solicita uma conexão usando as mesmas credenciais. O cache de conexão persistente permite evitar a sobrecarga de estabelecer uma nova conexão sempre que um script precisa se comunicar com um banco de dados, resultando em um aplicativo da web mais rápido.
*/

$usuario = "root"; //usuario do banco de dados
$senha = "[96284269]Ai"; // senha do usuario
$origemDsn = "mysql:"; //origem do banco de dados, especifica qual banco vou usar, porque o PDO e uma generalização
$host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
$nomeDataBase = "dbname= world;"; //database que vou usar
$port = "3306;"; //porta de conexão do usuario

//cria uma instancia de PDO estabelecendo uma conexão, passando os paramentros necessarios para o construtor, para identificar o banco de origem
//PDO::ATTR_PERSISTENT(mixed)
//Solicite uma conexão persistente, em vez de criar uma nova conexão.
$dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));                    

/**
 * O valor da PDO::ATTR_PERSISTENTopção é convertido em bool (ativar / desativar conexões persistentes), a menos que seja uma string não numérica , caso em que permite o uso de vários pools de conexão persistente. Isso é útil se conexões diferentes usam configurações incompatíveis, por exemplo, valores diferentes de PDO::MYSQL_ATTR_USE_BUFFERED_QUERY.
 * 
 * Nota: Se você deseja usar conexões persistentes, deve definir PDO::ATTR_PERSISTENT na matriz(array) de opções de driver passada ao construtor PDO. Se configurar este atributo com PDO::setAttribute() após a instanciação do objeto, o driver não usará conexões persistentes.
 * 
 * Nota: Se você estiver usando o driver ODBC PDO e suas bibliotecas ODBC suportarem pool de conexão ODBC (unixODBC e Windows são dois; pode haver mais), então é recomendado que você não use conexões PDO persistentes e, em vez disso, deixe a conexão cache para a camada de pool de conexão ODBC. O pool de conexão ODBC é compartilhado com outros módulos no processo; se o PDO for instruído a armazenar a conexão em cache, essa conexão nunca será retornada ao pool de conexão ODBC, resultando na criação de conexões adicionais para atender a esses outros módulos.
*/

?>