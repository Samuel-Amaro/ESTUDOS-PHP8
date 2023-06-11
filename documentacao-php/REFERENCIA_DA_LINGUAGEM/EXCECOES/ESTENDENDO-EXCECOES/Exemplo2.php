<?php 

/**
 * * EXEMPLO #2 ESTENDENDO A CLASSE EXCEPTION (PHP 5.3.0+) 
 * 
 * 
*/

/**
 * Define uma classe de exceção, que herda metodos propriedades da SuperClass Exception
*/
class MyException extends Exception{
    //Redefine a exceção de forma que a mensagem não seja opcional
    public function __construct($message, $code = 0, Exception $previous = null) {
        //garante que tudo está corretamente inicializado
        //chama o construtor da super classe, passsando os paramentos de inicialização, da classe pai
        parent::__construct($message, $code, $previous);
    }

    //personaliza a apresentação do objeto com string
    public function __toString() {
        return __CLASS__ . ":[{$this->code}]: {$this->message} </br>";
    }

    public function customFunction() {
        echo "Uma função específica desse tipo de exceção </br>";
    }
}

/**
 * Cria uma classe para testar a exceção 
*/
class TestException {
    //propriedade da classe
    public $var;
    //constantes da classe
    const THROW_NONE = 0;
    const THROW_CUSTOM = 1;
    const THROW_DEFAULT = 2;

    //definindo uma metodo construtor que vai possuir um valor padrão constante
    function __construct($avalue = self::THROW_NONE) {
        switch ($avalue) {
            case self::THROW_CUSTOM: //valor 1
                //lança uma instancia da exceção customizada
                throw new MyException('1 é uma parâmetro inválido', 5);
                break;
            
            case self::THROW_DEFAULT: //valor 2
                //lança uma instancia da exceção padrão
                throw new Exception('2 não é um parâmetro permitido', 6);
                break;

            default:
                # sem exceção, o objeto será criado
                $this->var = $avalue;
                break;
        }
    }
}

//Exemplo 1
try {
    //cria uma instancia de objeto da class de test Exception, passando um valor constante definido na propria classe, como paramentro de inicialização
    $o = new TestException(TestException::THROW_CUSTOM);
} catch (MyException $e) { //Entrará aqui...
    echo "Pegou MyException <\br>", $e;
    $e->customFunction();
}catch(Exception $e) { //... mas não aqui
    echo "Pegou Exception padrão </br>", $e;
}

//execução constinua
var_dump($o); //Null
echo "</br></br>";

//Exemplo 2
try {
    //cria uma instancia de objeto da class de test Exception, passando um valor constante definido na propria classe, como paramentro de inicialização
    $o = new TestException(TestException::THROW_DEFAULT);
} catch (MyException $e) { //Não Entrará aqui...
    echo "Pegou MyException <\br>", $e;
    $e->customFunction();
}catch(Exception $e) { //... porque entrará aqui
    echo "Pegou Exception padrão </br>", $e;
}

//Execução continua
var_dump($o); //Null
echo "</br></br>";

//Exemplo 3
try {
    //cria uma instancia de objeto da class de test Exception, passando um valor constante definido na propria classe, como paramentro de inicialização
    $o = new TestException(TestException::THROW_CUSTOM);
}catch(Exception $e) { //Entrará aqui
    echo "Pegou Exception padrão </br>", $e;
}

//execução continua
var_dump($o); //Null
echo "</br></br>";

//Exemplo 4
try {
    //cria uma instancia de objeto da class de test Exception
    $o = new TestException();
}catch(Exception $e) { //Não Entrará aqui, sem exceção
    echo "Pegou Exception padrão </br>", $e;
}

//Execução continua
var_dump($o); //TestException
echo "</br></br>";

?>