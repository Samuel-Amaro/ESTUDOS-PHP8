<?php

/**
 * Um exemplo de implementação específica do projeto.
 * 
 * Depois de registrar esta função de carregamento automático com SPL, a seguinte linha 
 * faria com que a função tentasse carregar a     classe \Foo\Bar\Baz\Qux 
 * 
 * de /path/to/project/src/Baz/Qux.php: 
 *  
 *          new \Foo\Bar\Baz\Qux;
 * 
 * @param string $class O nome totalmente qualificado da classe. 
 * @return void
*/

//o parametro e uma função anonima
spl_autoload_register(function ($class) {
    //prefixo de namespace especifico do projeto
    $prefix = 'Foo\\Bar\\';

    //diretório base para o prefixo de namespace
    $base_dir = __DIR__ . '/src/';

    //a classe usa o prefixo de namespace?
    $len = strlen($prefix);
    //verifica se o $prefix e $class possui a mesma quantidade de caracteres $len, se a $prefix for menor que $class, ou se $prefix for maior que $class não importa 
    if(strncmp($prefix, $class, $len) !== 0) {
        //não, vá para o próximo autoloader registrado
        return;
    }

    //obtém o nome da classe relativa
    $relative_class = substr($class, $len);

    //substitua o prefixo do namespace pelo diretório base, substitua o namespace
    //separadores com separadores de diretório no nome da classe relativa anexar
    //com .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    //se o arquivo existir, solicite
    if(file_exists($file)) {
        require $file;
    }
});