<?php


/*Conecte-se a um banco de dados PostGreSQL usando a invocação do driver*/

class Connection{
    //valores padrões de conexão
    private const USUARIO = "postgres"; //nome de usuario dsn
    private const SENHA = "123"; //senha de usuario dsn
    private const ORIGEN_DSN = "pgsql: "; //nome do driver PDO
    private const HOST = "host=localhost;"; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
    private const DATA_BASE = "dbname= db_dvd_rental;"; //banco de dados
    private const PORT = "port=5432;"; //porta em que o usuario esta conectado
    
    private string $user; //nome de usuario dsn
    private string $senha; //senha de usuario dsn
    private string $dsn; //nome do driver PDO 
    private string $host; //pode ser um endereço ip se tiver hospedagem ou dominio ou 127.0.0.1
    private string $dataBase; //banco de dados
    private string $port; //porta em que o usuario esta conectado
    private PDO $connection; //guardara a conexão estabelecida

    public function __construct(string $userP, string $senhaP, string $dsnP, string $hostP, string $dataBaseP, string $portP)
    {
        $this->user = $userP;
        $this->senha = $senhaP;
        $this->dsn = $dsnP;
        $this->host = $hostP;
        $this->dataBase = $dataBaseP;
        $this->port = $portP;
        //ao instancia um objeto que PDO que ira representar uma conexao com o banco de dados, vamos utilizar especificação de argumento para invocação de driver, o dsn tem que estar completo
        $this->connection = new PDO($this->dsn . $this->host . $this->port . $this->dataBase, $this->user, $this->senha);
    }


    public function setUser(string $user) {
        $this->user = $user;
    }
    public function getUser() : string{
        return $this->user;
    }
    public function setSenha(string $senha) {
        $this->senha = $senha;
    }
    public function getSenha() : string{
        return $this->senha;
    }
    public function setDsn(string $dsn) {
        $this->dns = $dsn;
    }
    public function getDsn() : string{
        return $this->dsn;
    }
    public function setHost(string $h) {
        $this->host = $h;
    }
    public function getHost() : string{
        return $this->host;
    }
    public function setDataBase(string $db) {
        $this->dataBase = $db;
    }
    public function getDataBase() : string{
        return $this->dataBase;
    }
    public function setPort(string $p) {
        $this->port = $p;
    }
    public function getPort() : string{
        return $this->port;
    }
    public function getConnection() : PDO{
        return $this->connection;
    }
    public function fechaConnection() {
        $this->connection = null;
    }


}

?>