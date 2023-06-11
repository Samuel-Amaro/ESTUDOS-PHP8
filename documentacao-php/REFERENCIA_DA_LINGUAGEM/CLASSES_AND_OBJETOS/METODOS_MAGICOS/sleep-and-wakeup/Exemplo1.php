<?php 

/**
 * * EXEMPLO #1 Sleep e wakeup
 * 
 *  
*/

//definição da classe
class Connection {
    //uma propriedade visivel para a classe declarante e herdeiras
    protected $link;
    //propriedades privada, somente a classe declarante pode acessar
    private $dsn, $username, $password;

    //definindo um construtor para a classe, com 3 paramentros de inicialização obrigatorios
    public function __construct($dsn, $username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    //metodo privado somente a classe declarante acessa
    private function connect() {
        //Representa uma conexão entre o PHP e um servidor de banco de dados.
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    /**
     *  O intuito do método __sleep() é enviar dados pendentes ou realizar tarefas de limpeza. Além disso, a função é útil se tiver objetos muito grandes que não precisem ser completamente salvos.
     * 
     * o __sleep() pode limpar o objeto e deve retornar um array com os nomes de todas as variáveis do objeto que devem ser serializadas. Se o método não retornar nada, então null é serializado e um E_NOTICE disparado.
    */
    public function __sleep() {
        //retorna um array com o seguintes variaveis(propriedades declaradas) 
        return array('dsn', 'username', 'password');
    }

    /**
     * essa função pode reconstruir qualquer recurso que o objeto possa ter.
     * 
     * O intuito do método __wakeup() é reestabelecer qualquer conexão com banco de dados que podem ter sido perdidas durante a serialização, e realizar outras tarefas de reinicialização
    */
    public function __wakeup() {
        //chama o metodo privado
        $this->connect();
    }


}

?>