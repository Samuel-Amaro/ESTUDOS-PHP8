<?php

/**
 * * ESTENDENDO EXCEÇÕES
 * 
 *  Uma classe de exceção definida pelo usuário pode ser criada herdando a classe Exception. Os membros e propriedades abaixo mostram o que é acessível a partir da classe filha que deriva da Exception.
 * 
 * EXEMPLO #1 A class nativa exception
*/

class Exception extends Throwable
{
    protected $message = 'Unknown exception';   // Mensagem da exceção
    private   $string;                          // Cache __toString 
    protected $code = 0;                        // Código definido pelo usuário
    protected $file;                            // Nome do arquivo onde a exceção originou
    protected $line;                            // Número da linha onde a exceção originou
    private   $trace;                           // Backtrace
    private   $previous;                        // Exceção anterior (se exceção empilhada)

    public function __construct($message = null, $code = 0, Exception $previous = null) {

    }

    final private function __clone(); // Inibe a clonagem de exceções

    final public  function getMessage();        // Mensagem da exceção
    final public  function getCode();           // Código definido pelo usuário
    final public  function getFile();           // Nome do arquivo onde a exceção originou
    final public  function getLine();           // Número da linha onde a exceção originou
    final public  function getTrace();          // Um array do backtrace()
    final public  function getPrevious();       // Exceção anterior
    final public  function getTraceAsString();  // Backtrace formatado como string

    // Pode ser sobrescrito
    public function __toString();               // String formatada da exceção
}

/**
 * Se uma classe estender a classe Exception e redefinir o constructor, então é altamente recomendável que também seja chamado o parent::__construct() para garantir que todos os dados estejam corretamente informados. O método __toString() pode ser sobrescrito para fornecer uma representação customizada do objeto quando utilizado como string.
 * 
 *  Nota: Exceções não podem ser clonadas. Tentativas de clonar um Exception resultarão em erros E_ERROR fatais.
*/

?>