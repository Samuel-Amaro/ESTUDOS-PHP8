
<?php

/**
 * * EXEMPLO #3 BUSCANDO DADOS USANDO INSTRUÇÕES PREPARADAS
 * 
 *  Este exemplo busca dados com base em um valor-chave fornecido por um formulário. A entrada do usuário é citada automaticamente, portanto, não há risco de um ataque de injeção de SQL.
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

    //preparando consulta com marcadores de posição (?)
    $stmt = $dbh->prepare("SELECT * FROM livraria.cliente WHERE nome = ?;");
    
    //$valor = array($_POST['nome']);

    //$stmt->bindParam(1,);
    $stmt->execute([$_POST["nome"]]);

    if(is_array($stmt) || isset($stmt) || (empty($stmt) == false)) {
        foreach($stmt as $row) {
            echo "Codigo: {$row["codigo"]} </br>
                  Nome: {$row["nome"]} </br>
                  Cidade: {$row["cidade"]} </br>
                  CEP: {$row["cep"]} </br>
                  Estado: {$row["estado"]} </br>
                  Referencia: {$row["referencia"]} </br>
                  CPF: {$row["cpf"]} </br>
                  CNPJ: {$row["cnpj"]} </br>
                  Tipo Cliente: {$row["tipo_cliente"]} </br>
            ";
        }
    }else{
        echo "<p>Cliente não encontrado!</p>";
    }
    

    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    //$dbh = null;
    //$stmt = null;

} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}


?>