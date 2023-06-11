<?php

/**
 * * EXEMPLO #1 INSERÇÕES REPETIDAS USANDO INSTRUÇÕES PREPARADAS
 * 
 *  Este exemplo executa uma consulta INSERT substituindo a name e a value pelos marcadores de posição nomeados.
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
    $nomeDataBase = "dbname= livraria;";
    $port = "3306;";

    //cria uma instancia de PDO para conexão com mySQL
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha);                                       

    //preparando consulta com marcadores de posição nomeado
    $stmt = $dbh->prepare("INSERT INTO livraria.cliente (codigo, nome, cidade, cep, estado, referencia, cpf, cnpj, tipo_cliente) VALUES (:codigo, :nome, :cidade, :cep, :estado, :referencia, :cpf, :cnpj, :tipo_cliente);");
    
    //setando valores na consulta por meio dos marcadores de posição nomeado(:nome), valores vem atraves das variaveis
    $stmt->bindParam(':codigo', $codigo); //coluna id
    $stmt->bindParam(':nome', $nome); //coluna nome
    $stmt->bindParam(':cidade', $cidade); //coluna cidade
    $stmt->bindParam(':cep', $cep); //coluna cep
    $stmt->bindParam(':estado', $estado); //coluna estado
    $stmt->bindParam(':referencia', $referencia); //coluna referencia
    $stmt->bindParam(':cpf', $cpf); //coluna cpf
    $stmt->bindParam(':cnpj', $cnpj); //coluna cnpj
    $stmt->bindParam(':tipo_cliente', $tipo_cliente); //coluna tipo cliente

    //variaveis que representa os valores da coluna, para serem inseridos na consulta SQL Preparada
    $codigo = 7;
    $nome = 'Ronaldo nasario fenomeno';
    $cidade = 'Serra Bonita';
    $cep = '91234-091';
    $estado = 'Minas Gerais';
    $referencia = 'Proximo ao ponto de onibus';
    $cpf =  '091.934.123-00';
    $cnpj = '123567321876';
    $tipo_cliente = 'Fisico';

    //insere registro do cliente na linha 7 na tabela
    $stmt->execute();

    //insira outra linha com valores diferentes
    $codigo = 8;
    $nome = 'Galo Cego';
    $cidade = 'Lagoa Do Carro';
    $cep = '12450-43';
    $estado = 'Pernambuco';
    $referencia = 'Proximo ao posto de gasolina';
    $cpf =  '098.123.432-00';
    $cnpj = '544.901.234-01';
    $tipo_cliente = 'Fisico';

    //inseri outro registro do cliente na linha 8 na tabela
    $stmt->execute();

    //Retorna o número de linhas afetadas pela última instrução SQL
    echo "<p>Inseriu {$stmt->rowCount()} linha na tabela!</p>";

    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $dbh = null;
    $stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}


?>