<?php 

//valores padrões de conexão
const USUARIO = "postgres"; //nome de usuario dsn
const SENHA = "123"; //senha de usuario dsn
const ORIGEN_DSN = "pgsql: "; //nome do driver PDO
const HOST = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
const DATA_BASE = "dbname= db_dvd_rental;"; //banco de dados
const PORT = "port=5432;"; //porta em que o usuario esta conectado

include("../Connection.php");

/**
 * * EXEMPLO #3 ORDEM DE CONSTRUÇÃO
 * 
 *  Quando os objetos são buscados por meio, PDO::FETCH_CLASS as propriedades do objeto são atribuídas primeiro e, em seguida, o construtor da classe é chamado. Se PDO::FETCH_PROPS_LATE também for fornecido, a ordem é invertida, ou seja, primeiro o construtor é chamado e, em seguida, as propriedades são atribuídas.
*/

//declara uma classe chamada Ator
class Ator{
    //atributo(propriedade da classe) tem que ser iguais ao nomes das colunas, e mesma quantidade
    private int $actor_id;
    private string $first_name;
    private string $last_name;
    private string $last_update;

    public function __construct()
    {
        $this->info();
    }

    public function info() {
        //determina se uma variavel e declarada e diferente de null, se o id da linha de resultado estiver declarado e existir, mostra as informações
        if(isset($this->actor_id)) {
            echo "<b>Id:</b> {$this->actor_id} <b>Primeiro Nome:</b> {$this->first_name} <b>Ultimo Nome:</b> {$this->last_name} <b>Ultima atualização:</b> {$this->last_update} </br>";
        }else{
            //id não existe ou não foi declarado
            echo "Linha do conjunto de resultados não existe</br>";
        }
    }
}

try {    
    //instancia um objeto da classe conexao, criado uma nova conexão com o banco de dados, especificado pelos argumentos
    $objectCon = new Connection(USUARIO, SENHA, ORIGEN_DSN, HOST, DATA_BASE, PORT);
    //chama a conexão estabelecida
    $connection = $objectCon->getConnection();
    //sql da consulta
    $sql = "SELECT * FROM actor ORDER BY first_name LIMIT 10;";
    //prepara uma consulta
    $stmt = $connection->prepare($sql);
    //executa uma consulta preparada
    $stmt->execute();
    //Define o modo de carga de dados para esta instrução
    //PDO::FETCH_CLASS: retorna uma nova instância da classe solicitada, mapeando as colunas do conjunto de resultados para propriedades nomeadas na classe e chamando o construtor depois, a menos que PDO::FETCH_PROPS_LATE também seja fornecido. Se mode inclui PDO::FETCH_CLASSTYPE (por exemplo PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE), o nome da classe é determinado a partir de um valor da primeira coluna.
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Ator');
    //traz uma linha do conjunto de resultados
    //como uma instancia de objeto da class Ator
    $ator = $stmt->fetch();
    //Define o modo de carga de dados para esta instrução
    //retorna uma instancia da class Ator como um linha do conjunto de resultados e chama o construtor primeiro e depois mapea as colunas para propriedades, Ator e classe que tem que ser utilizada
    $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ator');
    //traz uma linha do conjunto de resultados
    //como uma instancia de objeto da class Ator
    $ator = $stmt->fetch(); //não mostra nada
    $ator->info(); //mostra aqui o resultado da segunda chamada, porque primeiro mapea as colunas depois chama o construtor
} catch (PDOException $e) {
    print "Error!: <pre><code>" . $e->getMessage() . "</code></pre>";
    //sair do script
    die();
}finally{
    //fecha uma conexão que esta ativa no objeto pdo, null em todas referencias, e no objeto PDOStatment também, que manipula as consultas preparadas 
    $connection = null;
    $stmt = null;
}

?>