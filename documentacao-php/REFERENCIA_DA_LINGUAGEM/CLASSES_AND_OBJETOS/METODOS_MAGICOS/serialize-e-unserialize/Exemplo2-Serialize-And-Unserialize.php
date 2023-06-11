<?php 

/**
 * * EXEMPLO #2 Serialize And Unserialize
 * 
 *  
*/

//definição da classe
class Connection{
    //atributos(propriedades da classe)
    protected $link; //visibilidade(protegida, somente classe declarante e herdeiras tem acesso)
    private $dsn, $username, $password; //visibilidade(privada, somente classe declarante tem acesso)

    //definição do metodo construtor com paramentros obrigatorios na instanciacao de um obejto
    public function __construct($dsn, $username, $password) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    //metodo da classe
    private function connect() {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    //metodo magico que vai estar associado a classe
    //e retorna um array
    public function __serialize() : array {
        //um array com os seguintes itens de pares chave/valor como elementos do array
        return [
            'dsn' => $this->dsn,
            'user' => $this->username,
            'pass' => $this->password,
        ];
    }

    //metodo magico que vai estar associado a classe
    //necessita de um paramentro um array e retorna nada
    public function __unserialize(array $data) : void {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }
}


?>