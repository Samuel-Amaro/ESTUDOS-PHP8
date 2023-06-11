<?php

/**
 * * EXEMPLO #2 MANIPULANDO ERROS DE CONEXÃO
 *  
 * Se houver algum erro de conexão, um PDOException objeto será lançado. Você pode capturar a exceção se quiser manipular a condição de erro ou pode optar por deixá-la para um manipulador de exceção global do aplicativo que você configurou via set_exception_handler ().
*/


//se caso de um erro ao estabelecer conexão com o MYSQL,
//capture o erro de exceção um PDOException com o catch

try {
    //estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
    //a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

    $usuario = "root";
    $senha = "[96284269]Ai";
    $origemDsn = "mysql:";
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= world;";
    $port = "3306;";


    //cria uma instancia de PDO para conexão com mySQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

    //testa fazendo um consulta, que traga resultados
    foreach($dbh->query("SELECT * FROM world.city") as $row) {
        print_r($row); 
    }
    
   //fecha uma conexão que esta ativa no objeto pdo 
   $dbh = null;
} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

/**
 *  Aviso: Se o seu aplicativo não capturar a exceção lançada do construtor PDO, a ação padrão executada pelo mecanismo zend é encerrar o script e exibir um rastreamento de volta. Esse rastreamento provavelmente revelará todos os detalhes da conexão do banco de dados, incluindo o nome de usuário e a senha. É sua responsabilidade capturar essa exceção, explicitamente (por meio de uma catch instrução) ou implicitamente por meio de set_exception_handler () .
 * 
 * Após a conexão bem-sucedida com o banco de dados, uma instância da classe PDO é retornada ao seu script. A conexão permanece ativa durante o tempo de vida desse objeto PDO. Para fechar a conexão, você precisa destruir o objeto garantindo que todas as referências restantes a ele sejam excluídas - você faz isso atribuindo nullà variável que contém o objeto. Se você não fizer isso explicitamente, o PHP fechará automaticamente a conexão quando seu script terminar.
 * 
 * Nota : Se ainda houver outras referências a esta instância PDO (como de uma instância PDOStatement, ou de outras variáveis ​​que fazem referência à mesma instância PDO), elas também devem ser removidas (por exemplo, atribuindo nullà variável que faz referência ao PDOStatement )
*/

?>