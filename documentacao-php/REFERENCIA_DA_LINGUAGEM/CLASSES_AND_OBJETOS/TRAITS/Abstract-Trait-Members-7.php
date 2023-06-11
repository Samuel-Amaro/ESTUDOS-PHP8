<?php 

/**
 * * ABSTRACT TRAIT MEMBERS(MEMBROS COM TRAITS ABSTRATO)
 * 
 * As TRAITS suportam o uso de métodos abstratos para impor requisitos à classe expositora. Métodos públicos, protegidos e privados são suportados. Antes do PHP 8.0.0, apenas métodos abstratos públicos e protegidos eram suportados.
 * 
 * Cuidado Uma classe concreta atende a esse requisito definindo um método concreto com o mesmo nome; sua assinatura pode ser diferente.
 * 
 * * EXEMPLO #8 REQUISITOS EXPRESSOS POR MÉTODOS ABSTRATOS
 * 
*/


//declarando um trait chamado Ola que podera ser usado por qualquer classe
trait Ola{
    //metodo publico que podera ser usado por qualquer classe, metodo comun com implementação ja feita
    public function digaOlaMundo() {
        echo 'Hello' . $this->getWorld();
    }
    //metodo publico abstrato, sem implementação, e somente a assinatura do metodo
    //Métodos são definidos como abstratos declarando a intenção em sua assinatura - não podem definir a implementação.
    abstract public function getWorld();
}

//declarando uma classe Chamada MeuOlaMundo
class MeuOlaMundo{
    //propriedade(Atributo da classe)
    private $mundo;
    //declarando que a classe MeuOlaMundo utilizara o trait Ola, que possui dois metodos que podem ser usados aqui
    use Ola;
    
    //este metodo e o metodo abstrato declarado dentro da trait Ola, que por sua vez não possui implementação, e que tem que ser definida bem aqui na classe expositora, se tornando metodo acesso de atributo privaod
    public function getWorld()
    {
        return $this->world;    
    }
    //metodo acessor de atributo mas que pertence e foi declarado pela classe
    public function setMundo($val) {
        $this->mundo = $val;
    }
}

?>