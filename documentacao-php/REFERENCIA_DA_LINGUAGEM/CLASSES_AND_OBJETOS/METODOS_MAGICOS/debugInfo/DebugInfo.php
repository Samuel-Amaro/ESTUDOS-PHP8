<?php 

/**
 * * __debugInfo()
 * 
 *  __debugInfo(): array
 * 
 * Este método é chamado pela função var_dump() ao despejar um objeto para obter as propriedades que devem ser exibidas. Se este método não for definido em um objeto, todos as propriedades públicas, protegidas e provadas serão exibidas.
 * 
 * Exemplo #6 Utilizando o __debugInfo()
*/

//definição da classe
class C{
    //propriedades da classe com visibilidade protegida, somente classe declarante tem acesso
    private $prop;

    //metodo construtor da classe,
    //necessita de um paramentro obrigatorio na inicialização de objetos ao instancialos
    public function __construct($val) {
        $this->prop = $val;
    }

    //metodo magico associado a classe,
    //Este método é chamado pela função var_dump() ao despejar um objeto para obter as propriedades que devem ser exibidas. Se este método não for definido em um objeto, todos as propriedades públicas, protegidas e privadas serão exibidas.
    public function __debugInfo() {
        //retorna um array que contem um item par chave/valor sendo que o valor e o valor da propriedade elevado a 2
        return ['propSquared' => $this->prop ** 2];
    }
}

//ao usar a função var_dump em um objeto da classe que possua o metodo magico __debugInfo associado, o __debugInfor entra em ação dizendo o que deve ser mostrado de informação sobre a variavel
//cria um instancia de obejto e ja passa para o var_dump
var_dump(new C(42)); 

?>