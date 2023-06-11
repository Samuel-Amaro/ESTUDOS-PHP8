<?php 

/**
 * * EXEMPLO #1 Exemplo de Interface
 * 
 *  
*/

//Declara a interface 'iTemplate'
interface iTemplate{
    //assinatura dos metodos
    public function setVariable($name, $var);
    public function getHtml($template);
}

//Implementa a interface
//Para implementar uma interface, o operador implements é utilizado. Todos os métodos na interface devem ser implementados na classe; não fazê-lo resultará em um erro fatal. Classes podem implementar mais de uma interface se assim for desejado, separando cada interface com uma vírgula.
//Isso funcionará
//a CLASS template implementa a interface iTemplate , implementando os metodos padrões
class Template implements iTemplate{
    //propriedade da classe
    private $vars = array();

    //implementando metodo da interface
    public function setVariable($name, $var) {
        //seta itens no array com o par chave/valor
        $this->vars[$name] = $var;
    }

    //implementando metodo da interface
    public function getHtml($template) {
        //itera sobre os itens do array
        foreach($this->vars as $name => $value) {
            //subtitui o nome da variavel por um outro 
            //Substitui todas as ocorrências da string de procura com a string de substituição
            //str_replace(mixed $search, mixed $replace,mixed $subject, int &$count = ?): mixed
            //Esta função retorna uma string ou um array com todas as ocorrências de search em subject substituídas com o valor dado para replace.
            //Se search ou replace são arrays, seus elementos são processados do primeiro ao último.
            //subject Se subject é um array, então a pesquisa e a substituição é executada com cada entrada de subject, e o valor de retorno é um array também.
            $template = str_replace('{'.$name.'}', $value, $template);
        }
        return $template;
    }
}


//Isoo não Funcrionará
//Fatal error: Class BadTemplate contains 1 abstrac methods
//and must therefore be declared abstrac (iTemplate::getHtml)
class BadTemplate implements iTemplate {
    //propriedade da classe
    private $vars = array();
    //so implementa um unico metodo da interface falta um metodo, erro na implementação da interface
    public function setVariable($name, $var) {
        $this->vars[$name] = $var;
    }
}


?>