<?php 

/**
 * * ERROS NO PHP 7
 * 
 *  O PHP 7 modificou como a maioria dos erros são reportados pelo PHP. Em vez de reportá-los através do mecanismo tradicional de reporte de erros utilizado pelo PHP 5, a maioria dos erros, agora são reportados lançando exceções Error.
 * 
 * Assim como exceções normais, as exceções Error serão elevadas até alcançarem o primeiro bloco catch correspondente. Se não existir nenhum bloco correspondente, qualquer manipulador de exceção padrão instalado com a função set_exception_handler() será chamado, e se não existir nenhum manipulador padrão de exceção, a exceção será convertida em um erro fatal e tratada como um erro tradicional.
 * 
 * Já que a hierarquia de Error não herda de Exception, códigos que utilizam blocos catch (Exception $e) { ... } para manipular exceções que não foram capturadas no PHP 5, descobrirão que estes Errors não são capturados por estes blocos. Um bloco catch (Error $e) { ... }, ou um manipulador definido com a função set_exception_handler() será necessário.
 * 
 * Hierarquia Error ¶
    Throwable
        Error
            ArithmeticError
                DivisionByZeroError
            AssertionError
            CompileError
                ParseError
            TypeError
                ArgumentCountError
        Exception
            ...
*/

?>