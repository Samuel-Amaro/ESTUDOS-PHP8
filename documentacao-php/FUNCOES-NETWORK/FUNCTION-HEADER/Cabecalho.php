<?php 

/**
 * 
 * * CABEÇALHOS(HEADER) HTTP
 * 
 * As mensagens de cabeçalho HTTP são utilizadas para realizar a descrição de algum recurso ou comportamento do cliente ou servidor.  
 * 
 * Os cabeçalhos HTTP permitem que o cliente e o servidor passem informações adicionais com a solicitação(REQUEST) ou a resposta(RESPONSE) HTTP. Um cabeçalho de solicitação é composto por seu nome case-insensitive (não diferencia letras maiúsculas e minúsculas), seguido por dois pontos ':' e pelo seu valor (sem quebras de linha).  Espaços em branco antes do valor serão ignorados.
 * 
 * Cabeçalhos podem ser classificados de acordo com os seus contextos:
 
  - Cabeçalho genérico: Cabeçalhos que podem ser usados tanto em solicitações quanto em respostas, porém sem relação com os dados eventualmente transmitidos no corpo da mensagem.

  - Cabeçalho de solicitação: Cabeçalhos contendo mais informação sobre o recurso a ser obtido ou sobre o próprio cliente.

  - Cabeçalho de resposta (en-US): Cabeçalhos contendo informação adicional sobre a solicitação, como a sua localização ou sobre o servidor.

  - Cabeçalho de entidade(CARACTERES): Cabeçalhos contendo mais informação sobre o conteúdo da entidade, como o tamanho do conteúdo ou o seu MIME-type.
*/

/**
 * * CABEÇALHO(HEADER)
 *  
 * header - Envia um cabeçalho HTTP bruto
 * 
 * * DESCRIÇÃO

     header(string $header, bool $replace = true, int $response_code = 0): void

 * 
 * header () é usado para enviar um cabeçalho HTTP bruto.
 * 
 * Lembre-se de que header() deve ser chamado antes que qualquer saída real seja enviada, seja por tags HTML normais, linhas em branco em um arquivo ou de PHP. É um erro muito comum ler o código com funções include ou require , ou outra função de acesso ao arquivo, e ter espaços ou linhas vazias antes de header () ser chamado. O mesmo problema existe ao usar um único arquivo PHP/HTML.
*/

/**
 * * PARÂMETROS
 * 
 * * header(CABEÇALHO)
 
    A string de cabeçalho.

    Existem duas chamadas de cabeçalho de caso especial. O primeiro é um cabeçalho que começa com a string " HTTP/" (maiúsculas e minúsculas não são significativas), que será usado para descobrir o código de status HTTP a ser enviado. Por exemplo, se você configurou o Apache para usar um script PHP para lidar com solicitações de arquivos ausentes (usando a ErrorDocumentdiretiva), você pode querer ter certeza de que seu script gera o código de status apropriado.

    O segundo caso especial é o cabeçalho "Location:". Ele não apenas envia esse cabeçalho de volta ao navegador, mas também retorna um REDIRECTcódigo de status (302) para o navegador, a menos que 201 ou um 3xx código de status já tenha sido definido.

 * 
 * * REPLACE(SUBSTITUIR)

    O replaceparâmetro opcional indica se o cabeçalho deve substituir um cabeçalho semelhante anterior ou adicionar um segundo cabeçalho do mesmo tipo. Por padrão, ele substituirá, mas se você passar falsecomo o segundo argumento, poderá forçar vários cabeçalhos do mesmo tipo. Por exemplo:

 * * RENPONSE_CODE(codigo de resposta)
 
     Força o código de resposta HTTP para o valor especificado. Observe que este parâmetro só tem efeito se o headernão estiver vazio.

*/

/**
 * * VALOR RETORNADO
 * 
 * não há valor retornado. 
*/

/**
 * * ERROS
 * 
 * em caso de falha em agendar o envio do cabeçalho, header() emite um E_WARNING erro de nível. 
*/


?>