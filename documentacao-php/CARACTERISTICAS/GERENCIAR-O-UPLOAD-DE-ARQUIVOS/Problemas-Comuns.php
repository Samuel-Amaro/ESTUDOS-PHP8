<?php

/**
 * * PROBLEMAS COMUNS
 * 
 * O item MAX_FILE_SIZE não pode assumir um tamanho de arquivo maior que o tamanho de arquivo configurado em upload_max_filesize no arquivo php.ini. O valor padrão é de 2 megabytes.
 * 
 * Se um limite de memória está ativo, um valor maior para o limite de memória no parâmetro memory_limit pode ser necessário. Tenha certeza de estabelecer um limite de memória grande o suficiente através do parâmetro memory_limit.
 * 
 * Se o tempo máximo de execução definido através do parâmetro max_execution_time for muito pequeno, a execução do script pode ultrapassar o limite de tempo. Tenha certeza de estabelecer um tempo máximo de execução grande o suficiente através do parâmetro max_execution_time.
 * 
 * Nota: O parâmetro max_execution_time somente afeta o tempo de execução do script em sí. Qualquer tempo gasto com atividades que aconteçam fora da execução do script como chamadas de sistema usando system(), a função sleep(), pesquisas em banco de dados, tempo gasto pelo processo de enviar um arquivo(upload), etc. não são considerados no momento de determinar o limite de tempo máximo de um script em execução.
 * 
 * Aviso: O parâmetro max_input_time define o tempo máximo, em segundos, que é permitido ao script a receber entradas, isto inclui upload de arquivos. Para um arquivo grande, múltiplos arquivos ou usuários com conexões lentas, o padrão de 60 segundos pode ser ultrapassado.
 * 
 * Se o parâmetro post_max_size for muito pequeno, arquivos grandes podem não ser carregados. Tenha certeza de definir o parâmetro post_max_size grande o suficiente.
 * 
 * O parâmetro max_file_uploads controla o número máximo de arquivos que podem ser enviados em uma única requisição. Caso sejam enviados mais arquivos que o definido neste limite, então $_FILES interromperá o processamento de arquivos uma vez que o limite tenha sido atingido. Por exemplo, se o parâmetro max_file_uploads está definido como 10, então $_FILES nunca possuirá mais de 10 itens.
 * 
 * Não validar o arquivo que você está operando pode permitir que os usuários acessem informações sensíveis em outros diretórios.
 * 
 * Por favor note que o CERN httpd aparenta retirar tudo começando no primeiro espaço do cabeçalho(header) content-type mime recebido do cliente. Se for este o caso, CERN httpd não irá suportar o upload de arquivos.
 * 
 * Devido ao grande número de estilos de listagem de diretórios não podemos garantir que arquivos com nomes exóticos (como os que contém espaços) sejam manuseados corretamente.
 * 
 * Um desenvolvedor não deve misturar campos comuns de entrada input e campos de upload de arquivo na mesma variável de formulário (usando um nome de campo input como foo[]).
*/

?>