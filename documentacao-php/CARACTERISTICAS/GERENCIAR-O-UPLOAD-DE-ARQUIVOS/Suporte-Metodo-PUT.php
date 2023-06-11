<?php

/**
 * * SUPORTE AO MÉTODO PUT
 * 
 *  O PHP oferece suporte para o método HTTP PUT utilizado por alguns clientes para armazenar arquivos em um servidor. Requisições PUT são muito mais simples que o upload de arquivos usando requisições POST, elas se parecem com algo assim:
 * 
 * PUT /path/filename.html HTTP/1.1
 * 
 * Isso normalmente significaria que o cliente remoto gostaria de salvar o seguinte conteúdo: /path/filename.html em seu diretório web. É óbvio não tratar-se de uma boa idéia que o Apache ou o PHP permitam automaticamente que todos sobrescrevam qualquer arquivo em seu diretório web. Então, para considerar isso como uma requisição é necessário dizer ao seu servidor web que você quer que um determinado script PHP cuide dessa requisição. Para fazer isso no Apache utilize a diretiva Script. Ela pode ser colocada quase em qualquer local de seu arquivo de configuração do Apache. Um local comum é dentro de um bloco <Directory> ou talvez dentro de um bloco <VirtualHost>. Uma linha como a seguinte deve funcionar:
 * 
 * Script PUT /put.php
 *
 * Isto diz ao Apache para enviar todas as requisições PUT paras as URIs que combinem com o contexto dessa linha para o script put.php. Isto assume que o PHP esteja ativo e permita extensões .php. O destino para todas as requisições PUT para esse script deve ser o próprio script, não o nome do arquivo enviado.
 * 
 * Com o PHP pode ser feito algo como se segue no script put.php. Isso copia o conteúdo de um arquivo enviado para o arquivo myputfile.ext no servidor. Provavelmente é necessário a realização de algumas verificações e/ou autenticações de usuário antes de realizar essa cópia.
*/

?>