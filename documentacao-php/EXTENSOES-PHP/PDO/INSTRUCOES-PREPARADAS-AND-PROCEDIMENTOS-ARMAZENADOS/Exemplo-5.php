<?php

/**
 * * EXEMPLO #5 CHAMANDO UM PROCEDIMENTO ARMAZENADO COM UM PARÂMETRO DE ENTRADA/SAÍDA
 * 
 *  Os desenvolvedores também podem especificar parâmetros que contêm valores de entrada e saída; a sintaxe é semelhante aos parâmetros de saída. No próximo exemplo, a string 'hello' é passada para o procedimento armazenado e, quando retorna, hello é substituído pelo valor de retorno do procedimento.
*/

//PARA ESTE EXEMPLO NÃO TEMOS UMA PROCEDURE CRIADA COM UM PARAMENTRO DE SAIDA, VAMOS SEGUIR OQUE O TUTORIAL PROPOE, SEM ADAPTAR PARA NOSSO EXEMPLO

//se caso de um erro ao estabelecer conexão com o MYSQL,
//capture o erro de exceção um PDOException com o catch

try {
    //estabelecendo uma conexão ao criar uma instancia da classe PDO, independente do drive que for usar
    //a origem do banco de dados e conhecida pelo DSN, e nome de usuario e senha

    $usuario = "postgres";
    $senha = "123";
    $origemDsn = "pgsql:";
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= film;";
    $port = "5432;";

    //cria uma instancia de PDO para conexão com PostGresSQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

   
    //preparando consulta com marcadores de posição (?)
    $stmt = $dbh->prepare("CALL sp_takes_string_returns_string(?)");

    $value = 'hello';

    //PDO::PARAM_STRRepresenta o SQL CHAR, VARCHAR ou outro tipo de dados de sequência.
    //4000 o tamanho do caracter
    //PARAM_INPUT_OUTPUT: Especifica que o parâmetro é um parâmetro INOUT para um procedimento armazenado. Você deve bitwise-OR este valor com um tipo de dados PDO :: PARAM_ * explícito.
    $stmt->bindParam(1, $value, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);

    //chame o procedimento armazenado
    $stmt->execute();

    print "procedure retornou $value </br>";
    
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}

?>