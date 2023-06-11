<?php

/**
 * * EXECUTANDO UM LOTE EM UMA TRANSAÇÃO 
 * 
 * No exemplo a seguir, vamos supor que estejamos criando um conjunto de entradas para um novo funcionário, a quem foi atribuído um número de ID 23. Além de inserir os dados básicos dessa pessoa, também precisamos registrar seu salário. É muito simples fazer duas atualizações separadas, mas ao incluí-las nas chamadas PDO :: beginTransaction () e PDO :: commit () , estamos garantindo que ninguém mais será capaz de ver essas alterações até que sejam concluídas. Se algo der errado, o bloco catch reverterá todas as alterações feitas desde o início da transação e, em seguida, imprimirá uma mensagem de erro.
*/

try {
    $usuario = "root"; //usuario do banco de dados
    $senha = "[96284269]Ai"; // senha do usuario
    $origemDsn = "mysql:"; //origem do banco de dados, especifica qual banco vou usar, porque o PDO e uma generalização
    $host = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio
    $nomeDataBase = "dbname= livraria;"; //database que vou usar
    $port = "3306;"; //porta de conexão do usuario

    //cria uma instancia de PDO estabelecendo uma conexão, passando os paramentros necessarios para o construtor, para identificar o banco de origem
    //PDO::ATTR_PERSISTENT(mixed)
    //Solicite uma conexão persistente, em vez de criar uma nova conexão.
    $dbh = new PDO($origemDsn . " "  . $host . $port . $nomeDataBase, $usuario, $senha, array(PDO::ATTR_PERSISTENT => true));  
    echo "Connectado </br>";
} catch (Exception $e) {
    die("Incapaz de conectar: <pre><code>" . $e->getMessage() . "</code></pre>");
}

try {
    //PDO::setAttribute - Definir um atributo
    //Define um atributo no identificador do banco de dados. Alguns dos atributos genéricos disponíveis estão listados abaixo; alguns drivers podem fazer uso de atributos específicos de driver adicionais.
    //PDO::ATTR_ERRMODE: Relatório de erros.
    //PDO::ERRMODE_EXCEPTION: Lance exceções 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //PDO::beginTransaction — Inicia uma transação
    //Desativa o modo de envio automático. Enquanto o modo de envio automático estiver desativado, modificações feitas no banco de dados por meio da instância do objeto PDO não serão enviadas até que você finalize a transação chamando PDO::commit(). Chamar PDO::rollBack() reverterá todas as alterações no banco de dados e retornará a conexão para o modo de envio automático.
    //Alguns bancos de dados, incluindo o MySQL, emitem automaticamente um COMMIT implícito quando uma instrução de linguagem de definição de banco de dados (DDL) como DROP TABLE ou CREATE TABLE é emitida em uma transação. O COMMIT implícito impedirá que você reverta quaisquer outras alterações dentro do limite da transação.
    $dbh->beginTransaction();

    //MODIFICANDO O bANDO DE DADOS FAZENDO UMA INSERT NA TABELA CLIENTE
    $dbh->exec("INSERT INTO livraria.cliente (codigo, nome, cidade, cep, estado, referencia, cpf, cnpj, tipo_cliente) VALUES (5, 'Teste', 'Serra Talhada', '90123-011', 'Pernambuco', 'chacara comedia selvagem', '111.222.333-09', '091239381902', 'Fisico');");
    $dbh->exec("INSERT INTO livraria.cliente (codigo, nome, cidade, cep, estado, referencia, cpf, cnpj, tipo_cliente) VALUES (6, 'Teste 02', 'coronel jonça', '90123-011', 'Bahia', 'mansão rangel', '444.777.999-09', '091239381902', 'Juridico')");

    //PDO::commit — Envia uma transação
    //ENVIA A MODIFICAÇÃO FEITA PARA O BANCO DE DADOS
    //Envia uma transação, retornando a conexão com o banco de dados para o modo de envio automático até que a próxima chamada para PDO::beginTransaction() inicie uma nova transação.
    $dbh->commit();

    echo "Transação ocorrida com sucesso! </br>";

} catch (Exception $e) {
    //PDO::rollBack - Reverte uma transação
    //Reverte a transação atual, iniciada por PDO::beginTransaction().
    //Se o banco de dados foi configurado para o modo autocommit, esta função irá restaurar o modo autocommit após ter revertido a transação.
    //desfaz a modificação no banco antes de ser enviada
    //porque falhou
    $dbh->rollBack();
    echo "Falhou: <pre><code> " . $e->getMessage() . "</code></pre>";
}

/**
 * Você não está limitado a fazer atualizações em uma transação; você também pode emitir consultas complexas para extrair dados e, possivelmente, usar essas informações para criar mais atualizações e consultas; enquanto a transação estiver ativa, você tem a garantia de que ninguém mais poderá fazer alterações enquanto você estiver no meio de seu trabalho. Para obter mais informações sobre as transações, consulte a documentação fornecida por seu servidor de banco de dados.
*/


?>