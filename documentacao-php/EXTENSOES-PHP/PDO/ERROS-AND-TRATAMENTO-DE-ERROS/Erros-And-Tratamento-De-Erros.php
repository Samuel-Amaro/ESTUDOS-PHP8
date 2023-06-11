<?php

/**
 * * ERROS AND TRATAMENTO DE ERROS
 * 
 *  O PDO oferece uma escolha de 3 estratégias diferentes de tratamento de erros, para se adequar ao seu estilo de desenvolvimento de aplicativos.
 * 
  - PDO::ERRMODE_SILENT : Antes do PHP 8.0.0, este era o modo padrão. O PDO simplesmente definirá o código de erro para você inspecionar usando os métodos PDO::errorCode() e PDO::errorInfo() nos objetos de instrução e de banco de dados; se o erro resultou de uma chamada em um objeto de instrução, você invocaria o método PDOStatement::errorCode() ou PDOStatement:: errorInfo() nesse objeto. Se o erro resultou de uma chamada no objeto de banco de dados, você invocaria esses métodos no objeto de banco de dados.

  - PDO::ERRMODE_WARNING : Além de definir o código de erro, o PDO emitirá uma mensagem E_WARNING tradicional. Esta configuração é útil durante a depuração / teste, se você deseja apenas ver quais problemas ocorreram sem interromper o fluxo do aplicativo.

  - PDO::ERRMODE_EXCEPTION: A partir do PHP 8.0.0, este é o modo padrão. Além de definir o código de erro, o PDO lançará uma PDOException e definirá suas propriedades para refletir o código de erro e as informações de erro. Essa configuração também é útil durante a depuração, pois ela efetivamente "explodirá" o script no ponto do erro, apontando rapidamente o dedo para áreas com problemas potenciais em seu código (lembre-se: as transações são automaticamente revertidas se a exceção causar o script para encerrar).

  O modo de exceção também é útil porque você pode estruturar seu tratamento de erros de forma mais clara do que com avisos no estilo PHP tradicional e com menos código / aninhamento do que executando no modo silencioso e verificando explicitamente o valor de retorno de cada chamada de banco de dados.

  O PDO padroniza o uso de strings de código de erro SQL-92 SQLSTATE; drivers PDO individuais são responsáveis ​​por mapear seus códigos nativos para os códigos SQLSTATE apropriados. O método PDO :: errorCode () retorna um único código SQLSTATE. Se você precisar de informações mais específicas sobre um erro, o PDO também oferece um método PDO :: errorInfo () que retorna uma matriz contendo o código SQLSTATE, o código de erro específico do driver e a string de erro específica do driver.
*/

?>